/* global miaoxing */

import React from 'react';
import {Router, Route} from 'react-router-dom';
import Loadable from 'react-loadable';
import {Button} from 'antd';
import * as Sentry from '@sentry/browser';
import $ from 'miaoxing';
import app, {history, router} from '@mxjs/app';
import http from '@mxjs/http';
import {event} from '@mxjs/event';
import {InternalServerError, NotFound} from '@mxjs/ret';
import {PageLoading} from '@mxjs/loading';
import {ModalSwitch} from '@mxjs/router-modal';
import {ThemeProvider} from 'emotion-theming';
import PropTypes from 'prop-types';

const LoadableLoading = (props) => {
  if (props.error) {
    // eslint-disable-next-line no-console
    app.debug && console.error(props.error);
    Sentry.captureException(props.error);
    return <InternalServerError
      extra={<Button type="primary" onClick={props.retry}>重试</Button>}
    />;
  }
  return <PageLoading/>;
};
LoadableLoading.propTypes = {
  error: PropTypes.instanceOf(Error),
  retry: PropTypes.func,
};

export default class App extends React.Component {
  static propTypes = {
    pages: PropTypes.object,
    events: PropTypes.object,
    theme: PropTypes.object,
    plugins: PropTypes.object,
    layouts: PropTypes.object,
    defaultLayout: PropTypes.elementType,
  }

  static defaultProps = {
    /**
     * 所有的页面
     *
     * 如 {'admin/admins/edit': () => import('plugins/admin/pages/admin/admins/edit.js')}
     */
    pages: {},

    /**
     * 默认布局
     */
    defaultLayout: React.Fragment,

    /**
     * 插件的事件入口
     *
     * 如 {'app': () => import('plugins/app/events/admin/events.js')}
     *
     * @todo rename
     */
    plugins: {},

    /**
     * 插件的事件配置
     *
     * 如 {
     * 'pageLoad': {
     *   '100': [
     *     'app'
     *    ]
     *   }
     * }
     */
    events: {},

    /**
     * 主题配置
     */
    theme: {},
  };

  state = {
    theme: this.props.theme,
  };

  /**
   * 从后端加载的配置
   *
   * @type {Promise}
   */
  config;

  /**
   * 缓存加载过的页面
   *
   * 以便 modal 页面不会重新加载
   *
   * @type {object}
   */
  loadedPages = {};

  constructor(props) {
    super(props);

    // 最先设置，因为 config 要用到
    app.baseUrl = miaoxing.baseUrl;

    this.config = this.loadConfig();

    // 初始化事件
    this.config.then(ret => {
      if (typeof ret.debug !== 'undefined') {
        app.debug = ret.debug;
      }
      event.setConfigs({
        pluginIds: ret.pluginIds,
      });
    });
    event.setConfigs({
      events: props.events,
      plugins: props.plugins,
    });

    router.setPages(this.props.pages);
  }

  async componentDidMount() {
    const config = await this.config;
    this.setState({theme: Object.assign(this.state.theme, config.theme)});
  }

  loadableComponent = (props) => {
    const result = this.match(props.location);

    event.trigger('pageLoad', props);

    const key = props.location.pathname + props.location.search;
    if (!this.loadedPages[key]) {
      this.loadedPages[key] = Loadable({
        loader: () => this.importPage(result),
        loading: LoadableLoading,
      });
    }

    const LoadableComponent = this.loadedPages[key];
    const PageLayout = this.getLayout(result);
    return <PageLayout>
      <LoadableComponent {...props}/>
    </PageLayout>;
  };

  match(location) {
    let path = '';
    if (app.isUrlRewrite()) {
      path = location.pathname.substr(app.baseUrl.length);
    } else {
      path = '/' + app.req('r');
    }
    app.page = router.match(path);

    // 常用字段特殊处理
    // TODO 改为 req.id
    if (app.page && typeof app.page.params.id !== 'undefined') {
      app.id = app.page.params.id;
    } else {
      app.id = '';
    }

    return app.page;
  }

  async importPage(result) {
    return result ? result.import : NotFound;
  }

  getLayout(result) {
    if (result && typeof result.layout !== 'undefined') {
      if (result.layout) {
        return Loadable({
          loader: result.layout,
          loading: LoadableLoading,
        });
      } else {
        return React.Fragment;
      }
    } else {
      return this.props.defaultLayout;
    }
  }

  loadConfig() {
    return http.get('js-config').then(ret => {
      if (ret.code !== 1) {
        $.ret(ret);
        return;
      }
      return ret;
    });
  }

  render() {
    const Component = this.loadableComponent;

    return (
      <ThemeProvider theme={this.state.theme}>
        <Router history={history}>
          <ModalSwitch>
            <Route component={Component}/>
          </ModalSwitch>
        </Router>
      </ThemeProvider>
    );
  }
}
