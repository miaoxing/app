import React from 'react';
import {BrowserRouter, Route, Switch} from 'react-router-dom';
import Loading from 'components/Loading';
import NoMatch from 'components/NoMatch';
import ucfirst from 'ucfirst';
import Loadable from 'react-loadable';
import app from 'app';
import {ThemeProvider} from 'styled-components';
import theme from 'theme';

class App extends React.Component {
  constructor(props) {
    super(props);

    // 解析出页面路径中的插件和控制对应关系
    // 如 article/articles/Edit => articles:article
    this.controllerMap = {};
    Object.keys(this.props.pages).forEach((key) => {
      const parts = key.split('/');
      this.controllerMap[parts[1]] = parts[0];
    });

    this.loadableComponent = this.loadableComponent.bind(this);
    this.deep = 1;
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

  loadableComponent(props) {
    const LoadableComponent = Loadable({
      loader: () => {
        const controller = this.getController(props.match.params);
        const action = this.getAction(props.match.params);
        const plugin = this.controllerMap[controller];

        app.namespace = props.match.params.namespace;
        app.controller = controller;
        app.action = action;
        app.id = props.match.params.id;
        app.history = props.history;

        // TODO Nav也升级为React
        if (typeof $ !== 'undefined') {
          $(document).trigger('pageLoad', props);
          this.handleLoad(props);
          if (this.deep > 0) {
            $('.js-back').show();
          } else {
            $('.js-back').hide();
          }
        }

        return this.props.importPage(plugin, controller, action);
      },
      loading: Loading
    });

    // TODO 由modal组件处理
    props.history.listen((location, action) => {
      typeof $ !== 'undefined' && $('.modal').modal('hide');
    });

    return <LoadableComponent {...props}/>;
  }

  handleLoad(props) {
    if (props.history.action === 'POP') {
      this.deep--;
    } else if (props.history.action === 'PUSH') {
      this.deep++;
    } // ignore REPLACE
  }

  loadEvents() {
    // const events = require.context('vendor/miaoxing', true, /^\.\/.*\/resources\/events\/events\.(\w+)$/);
    // events.keys().forEach((key) => {
    //   if (wei.pluginIds.indexOf(key.split('/')[1]) !== -1) {
    //     events(key).default();
    //   }
    // });
  }

  render() {
    const Component = this.loadableComponent;
    return <ThemeProvider theme={theme}>
      <BrowserRouter>
        <Switch>
          {/* TODO /admin/login */}
          <Route exact path={app.url(':namespace(admin)?/:controller/:id(\\d+)?/:action?')} component={Component}/>
          <Route exact path={wei.appUrl} component={Component}/>
          <Route component={NoMatch}/>
        </Switch>
      </BrowserRouter>
    </ThemeProvider>;
  }
}

export default App;
