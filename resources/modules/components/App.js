import React from 'react';
import {BrowserRouter, Route} from 'react-router-dom';
import LoadableLoading from 'components/LoadableLoading';
import NoMatch from 'components/NoMatch';
import {ModalSwitch} from '@miaoxing/router-modal';
import ucfirst from 'ucfirst';
import Loadable from 'react-loadable';
import {ThemeProvider} from 'styled-components';
import app from 'app';
import theme from 'theme';
import {api as event} from '@miaoxing/event';
import axios from "axios";
import Layout from 'plugins/admin/resources/layouts/Default';
import {Spin} from 'antd';
import {Loading} from '@miaoxing/loading';
import {ConfigProvider} from 'antd';

// 指定 Antd 全局的 loading 样式
Spin.setDefaultIndicator(<Loading/>);

export default class App extends React.Component {
  static defaultProps = {
    pages: {},
    plugins: {},
    events: {},
  };

  pages = {};
  controllerMap = {};

  state = {
    menus: [],
    user: {},
  };

  componentDidMount() {
    axios(app.url('admin-api/admin-page'), {loading: true})
      .then(({data}) => this.setState(data));
  }

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

    const key = props.location.pathname + props.location.search;
    if (!this.pages[key]) {
      this.pages[key] = Loadable({
        loader: () => this.importPage(plugin, controller, action),
        loading: LoadableLoading,
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

  render() {
    const Component = this.loadableComponent;

    return (
      <ConfigProvider
        autoInsertSpaceInButton={false}
      >
        <ThemeProvider theme={theme}>
          <BrowserRouter>
            <Layout menus={this.state.menus} user={this.state.user}>
              <ModalSwitch>
                <Route exact path={app.url(':namespace(admin)?/:controller?/:id(\\d+)?/:action?')}
                  component={Component}/>
                <Route exact path={wei.appUrl} component={Component}/>
                <Route component={NoMatch}/>
              </ModalSwitch>
            </Layout>
          </BrowserRouter>
        </ThemeProvider>
      </ConfigProvider>
    )
  }
}
