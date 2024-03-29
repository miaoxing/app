import * as React from 'react';
import {Router, Route} from 'react-router-dom';
import loadable from '@loadable/component';
import $ from 'miaoxing';
import {wei, app, event, history} from '@mxjs/app';
import api from '@mxjs/api';
import {NotFound} from '@mxjs/a-ret';
import {PageLoading} from '@mxjs/a-loading';
import {ModalSwitch} from '@mxjs/router-modal';
import PropTypes from 'prop-types';
import {ThemeProvider, extendTheme} from '@chakra-ui/react';
import ErrorBoundary from './ErrorBoundary';
import {ConfigProvider} from './ConfigContext';

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
    config: {
      page: {},
    },
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
      this.setState({
        config: ret.data,
      });
      document.title = ret.data.page.title;
    });
  }

  async componentDidMount() {
    const config = await this.config;
    this.setState({theme: extendTheme(config.theme, this.state.theme)});
  }

  loadableComponent = (props) => {
    const page = app.matchLocation(props.location);

    event.trigger('pageLoad', props);

    const key = props.location.pathname.replace(/\/+$/, '') + props.location.search;
    if (!this.loadedPages[key]) {
      this.loadedPages[key] = loadable(() => this.importPage(page), {
        fallback: <PageLoading/>,
      });
    }

    const LoadableComponent = this.loadedPages[key];
    const PageLayout = this.getLayout(page);
    return <PageLayout>
      <ErrorBoundary>
        <LoadableComponent {...props}/>
      </ErrorBoundary>
    </PageLayout>;
  };

  async importPage(page) {
    return page ? page.import() : NotFound;
  }

  getLayout(page) {
    if (page && typeof page.layout !== 'undefined') {
      if (page.layout) {
        return loadable(() => page.layout, {
          fallback: <PageLoading/>,
        });
      } else {
        return React.Fragment;
      }
    } else {
      return this.props.defaultLayout;
    }
  }

  loadConfig() {
    return api.get('js-config').then(({ret}) => {
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
      <ConfigProvider value={this.state.config}>
        <ThemeProvider theme={this.state.theme}>
          <Router history={history}>
            <ModalSwitch>
              <Route component={Component}/>
            </ModalSwitch>
          </Router>
        </ThemeProvider>
      </ConfigProvider>
    );
  }
}
