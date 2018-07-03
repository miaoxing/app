import React from 'react'
import ReactDOM from 'react-dom'
import {BrowserRouter, Route, Switch, Link} from 'react-router-dom';
import Loading from 'components/Loading';
import NoMatch from "components/NoMatch";
import ucfirst from "ucfirst";
import Loadable from "react-loadable";

export default class App {
  constructor(options) {
    Object.assign(this, options);

    // 解析出页面的插件和控制对应关系
    this.controllerMap = {};
    this.pages.keys().forEach((key) => {
      const parts = key.split('/');
      this.controllerMap[parts[4]] = parts[1];
    });
  }

  run() {
    ReactDOM.render(this.getContainer(), document.getElementById('root'));
  }

  loadableComponent (props) {
    const LoadableComponent = Loadable({
      loader: () => {
        const controller = this.getController(props.match.params);
        const action = this.getAction(props.match.params);
        const plugin = this.controllerMap[controller];
        return this.importPage(plugin, controller, action)
      },

      loading: Loading,
    });
    return <LoadableComponent {...props}/>;
  }

  getContainer() {
    const Component = this.loadableComponent.bind(this);
    return <BrowserRouter>
      <Switch>
        <Route exact path={$.url(':controller')} component={Component}/>
        <Route exact path={$.url(':controller/:id(\\d+)')} component={Component}/>
        <Route exact path={$.url(':controller/:action')} component={Component}/>
        <Route exact path={$.url(':controller/:id(\\d+)/:action')} component={Component}/>
        <Route component={NoMatch}/>
      </Switch>
    </BrowserRouter>;
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

  loadEvents() {
    const events = require.context('vendor/miaoxing', true, /^\.\/.*\/resources\/events\/events\.(\w+)$/);
    events.keys().forEach((key) => {
      if (wei.pluginIds.indexOf(key.split('/')[1]) !== -1) {
        events(key).default();
      }
    });
  }
}
