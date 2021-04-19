import React from 'react';
import {Router, Route} from 'react-router-dom';
import Loadable from 'react-loadable';
import {Button} from 'antd';
import * as Sentry from '@sentry/browser';
import $ from 'miaoxing';
import {wei, app, event, history} from '@mxjs/app';
import api from '@mxjs/api';
import {InternalServerError, NotFound} from '@mxjs/ret';
import {PageLoading} from '@mxjs/loading';
import {ModalSwitch} from '@mxjs/router-modal';
import PropTypes from 'prop-types';
import {ThemeProvider, extendTheme} from '@chakra-ui/react';

const LoadableLoading = (props) => {
  if (props.error) {
    // eslint-disable-next-line no-console
    wei.getDebug() && console.error(props.error);
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
    configs: PropTypes.object,
    defaultLayout: PropTypes.elementType,
  };

  static defaultProps = {
    configs: {
      theme: {},
    },

    /**
     * 默认布局
     */
    defaultLayout: React.Fragment,
  };

  state = {
    theme: {},
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

    this.state.theme = extendTheme(this.props.configs.theme);

    wei.setConfigs(this.props.configs);
    this.config = this.loadConfig();
    this.config.then(ret => {
      wei.setConfigs(ret.data);
    });
  }

  async componentDidMount() {
    const config = await this.config;
    this.setState({theme: extendTheme(config.theme, this.state.theme)});
  }

  loadableComponent = (props) => {
    const page = app.matchLocation(props.location);

    event.trigger('pageLoad', props);

    const key = props.location.pathname + props.location.search;
    if (!this.loadedPages[key]) {
      this.loadedPages[key] = Loadable({
        loader: () => this.importPage(page),
        loading: LoadableLoading,
      });
    }

    const LoadableComponent = this.loadedPages[key];
    const PageLayout = this.getLayout(page);
    return <PageLayout>
      <LoadableComponent {...props}/>
    </PageLayout>;
  };

  async importPage(page) {
    return page ? page.import() : NotFound;
  }

  getLayout(page) {
    if (page && typeof page.layout !== 'undefined') {
      if (page.layout) {
        return Loadable({
          loader: page.layout,
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
    return api.get('js-config').then(ret => {
      if (ret.isErr()) {
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
