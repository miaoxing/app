import React from 'react';
import {BrowserRouter, Route} from 'react-router-dom';
import Loading from 'components/Loading';
import NoMatch from 'components/NoMatch';
import ModalSwitch from 'components/ModalSwitch';
import ModalView from "components/ModalView";
import ucfirst from 'ucfirst';
import Loadable from 'react-loadable';
import {ThemeProvider} from 'styled-components';
import app from 'app';
import theme from 'theme';
import event from 'event';

export default class App extends React.Component {
  static defaultProps = {
    pages: {},
    plugins: {},
    events: {},
  };

  deep = 1;
  pages = {};
  controllerMap = {};

  constructor(props) {
    super(props);

    // 初始化事件
    event.setConfigs(props);

    // 解析出页面路径中的插件和控制对应关系
    // 如 article/articles/Edit => {articles:article}
    Object.keys(this.props.pages).forEach(key => {
      const [plugin, controller] = key.split('/');
      this.controllerMap[controller] = plugin;
    });
  }

  getController(params) {
    return params.controller || 'index';
  }

  getAction(params) {
    if (params.action) {
      return ucfirst(params.action);
    } else if (params.id) {
      return 'Show';
    } else {
      return 'Index';
    }
  }

  loadableComponent = (props) => {
    const controller = this.getController(props.match.params);
    const action = this.getAction(props.match.params);
    const plugin = this.controllerMap[controller];

    app.namespace = props.match.params.namespace;
    app.controller = controller;
    app.action = action;
    app.id = props.match.params.id;
    app.history = props.history;

    app.trigger('pageLoad', props);
    this.handleBack(props);

    // 允许 state 传入 __reload 要求当前页面也要刷新
    const key = props.location.pathname + props.location.search + (props.location.state ? props.location.state.__reload : '');
    if (!this.pages[key]) {
      this.pages[key] = Loadable({
        loader: () => this.importPage(plugin, controller, action),
        loading: Loading,
      });
    }

    const LoadableComponent = this.pages[key];
    return <LoadableComponent {...props}/>;
  };

  importPage(plugin, controller, action) {
    // 允许外部配置替换页面
    let path = `${plugin}/${controller}/${action}`;
    if (typeof wei.pageMap[path] !== 'undefined') {
      path = wei.pageMap[path];
    }
    return this.props.pages[path] ? this.props.pages[path]() : new Promise(resolve => resolve(NoMatch));
  }

  /**
   * @param props
   * @deprecated 应通过 pageLoad 事件实现
   */
  handleBack(props) {
    if (typeof $ === 'undefined') {
      return;
    }

    if (props.history.action === 'POP') {
      this.deep--;
    } else if (props.history.action === 'PUSH') {
      this.deep++;
    } // ignore REPLACE

    if (this.deep > 0) {
      $('.js-back').show();
    } else {
      $('.js-back').hide();
    }
  }

  render() {
    const Component = this.loadableComponent;

    return (
      <ThemeProvider theme={theme}>
        <BrowserRouter>
          <ModalSwitch>
            <Route exact path={app.url(':namespace(admin)?/:controller/:id(\\d+)?/:action?')} component={Component}/>
            <Route exact path={wei.appUrl} component={Component}/>
            <Route component={NoMatch}/>
          </ModalSwitch>
        </BrowserRouter>
      </ThemeProvider>
    )
  }
}
