import React from 'react'
import ReactDOM from 'react-dom'
import {BrowserRouter, Route, Switch, Link} from 'react-router-dom';
import Loading from 'components/Loading';
import NoMatch from "components/NoMatch";
import ucfirst from "ucfirst";
import Loadable from "react-loadable";

class App extends React.Component {
  constructor(props) {
    super(props);

    // 解析出页面的插件和控制对应关系
    this.controllerMap = {};
    this.props.pages.keys().forEach((key) => {
      const parts = key.split('/');
      this.controllerMap[parts[5]] = parts[1];
    });

    this.loadableComponent = this.loadableComponent.bind(this);
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
        return this.props.importPage(plugin, controller, action);
      },

      loading: Loading,
    });
    return <LoadableComponent {...props}/>;
  }

  loadEvents() {
    const events = require.context('vendor/miaoxing', true, /^\.\/.*\/resources\/events\/events\.(\w+)$/);
    events.keys().forEach((key) => {
      if (wei.pluginIds.indexOf(key.split('/')[1]) !== -1) {
        events(key).default();
      }
    });
  }

  render() {
    const Component = this.loadableComponent;
    return <BrowserRouter>
      <Switch>
        <Route exact path={$.url('admin/:controller')} component={Component}/>
        <Route exact path={$.url('admin/:controller/:id(\\d+)')} component={Component}/>
        <Route exact path={$.url('admin/:controller/:action')} component={Component}/>
        <Route exact path={$.url('admin/:controller/:id(\\d+)/:action')} component={Component}/>
        <Route component={NoMatch}/>
      </Switch>
    </BrowserRouter>;
  }
}

export default App;
