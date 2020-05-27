/* global miaoxing */

import React from 'react';
import {Router, Route} from 'react-router-dom';
import ucfirst from 'ucfirst';
import Loadable from 'react-loadable';
import {Button} from 'antd';
import * as Sentry from "@sentry/browser";
import $ from 'miaoxing';
import app, {history} from "@miaoxing/app";
import api from '@miaoxing/api';
import {event} from '@miaoxing/event';
import {InternalServerError, NotFound} from '@miaoxing/ret';
import {PageLoading} from '@miaoxing/loading';
import {ModalSwitch} from '@miaoxing/router-modal';
import theme from '../modules/theme';
import pathToRegexp from "path-to-regexp";
import { ThemeProvider } from 'emotion-theming'

const LoadableLoading = (props) => {
  if (props.error) {
    app.debug && console.error(props.error);
    Sentry.captureException(props.error);
    return <InternalServerError
      extra={<Button type="primary" onClick={props.retry}>重试</Button>}
    />
  }
  return <PageLoading/>;
};

export default class App extends React.Component {
  static defaultProps = {
    /**
     * 所有的页面
     *
     * 如 {'admin/admins/Edit': () => import('plugins/admin/resources/pages/admin/admins/Edit.js')}
     */
    pages: {},

    /**
     * 默认布局
     */
    defaultLayout: React.Fragment,

    /**
     * 指定页面的布局
     *
     * 如 {"admin/login": React.Fragment}
     */
    layouts: {},

    /**
     * 插件的事件入口
     *
     * 如 {'app': () => import('plugins/app/resources/events/admin/events.js')}
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
  };

  state = {
    theme: theme
  };

  /**
   * 从后端加载的配置
   *
   * @type {Promise}
   */
  config;

  /**
   * 控制器对应的插件
   *
   * 如 {articles:article}
   *
   * @type {object}
   */
  controllerPlugins = {};

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

    // 解析出页面路径中的插件和控制对应关系
    // 如 article/articles/Edit => {articles:article}
    Object.keys(this.props.pages).forEach(key => {
      const [plugin, controller] = key.split('/');
      this.controllerPlugins[controller] = plugin;
    });
  }

  async componentDidMount() {
    const config = await this.config;
    this.setState({theme: Object.assign(this.state.theme, config.theme)});
  }

  getController(params) {
    return params.controller || 'index';
  }

  getAction(params) {
    if (params.action) {
      return params.action;
    } else if (params.id) {
      return 'show';
    } else {
      return 'index';
    }
  }

  loadableComponent = (props) => {
    const params = this.match(props.location) || {};
    const controller = this.getController(params);
    const action = this.getAction(params);
    const plugin = this.controllerPlugins[controller];

    app.namespace = params.namespace;
    app.controller = controller;
    app.action = action;
    app.id = params.id;

    event.trigger('pageLoad', props);

    const key = props.location.pathname + props.location.search;
    if (!this.loadedPages[key]) {
      this.loadedPages[key] = Loadable({
        loader: () => this.importPage(plugin, controller, action),
        loading: LoadableLoading,
      });
    }

    const LoadableComponent = this.loadedPages[key];
    const PageLayout = this.getLayout(app);
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

    const params = pathToRegexp('/:namespace(admin)?/:controller?/:id(\\d+)?/:action?').exec(path);
    if (!params) {
      return null;
    }

    return {
      namespace: params[1],
      controller: params[2],
      id: params[3],
      action: params[4],
    }
  }

  async importPage(plugin, controller, action) {
    const config = await this.config;

    // 允许外部配置替换页面
    let path = `${plugin}/${controller}/${ucfirst(action)}`;
    if (config.pageMap && typeof config.pageMap[path] !== 'undefined') {
      path = config.pageMap[path];
    }
    return this.props.pages[path] ? this.props.pages[path]() : NotFound;
  }

  getLayout(app) {
    const page = app.controller + '/' + app.action;
    if (typeof this.props.layouts[page] !== 'undefined') {
      if (this.props.layouts[page]) {
        return Loadable({
          loader: this.props.layouts[page],
          loading: LoadableLoading,
        });
      } else {
        return React.Fragment;
      }
    }
    return this.props.defaultLayout;
  }

  loadConfig() {
    return api.get('js-config').then(ret => {
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
      <ThemeProvider theme={theme}>
        <Router history={history}>
          <ModalSwitch>
            <Route component={Component}/>
          </ModalSwitch>
        </Router>
      </ThemeProvider>
    )
  }
}
