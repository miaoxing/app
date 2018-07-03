import React from 'react';
import ReactDOM from "react-dom";
import Loadable from "react-loadable";
import {BrowserRouter, Route, Switch, Link} from 'react-router-dom';
import Loading from 'components/Loading';
import NoMatch from 'components/NoMatch';
import ucfirst from 'ucfirst';

const getController = (params) => {
  return params.controller || 'index';
};

const getAction = (params) => {
  if (params.action) {
    return ucfirst(params.action);
  } else if (params.id) {
    return 'Show';
  } else {
    return 'Index';
  }
};

let controllerMap = {};
const actions = require.context('vendor/miaoxing', true, /^\.\/.*\/resources\/pages\/(.+?)\/(.+?)\.js$/, 'lazy');
actions.keys().forEach((key) => {
  const parts = key.split('/');
  controllerMap[parts[4]] = parts[1];
});

const Component = (props) => {
  const LoadableComponent = Loadable({
    loader: () => {
      const controller = getController(props.match.params);
      const action = getAction(props.match.params);
      const plugin = controllerMap[controller];

      // TODO 查看的源码的实现,确认任何会加载到 loader-runner
      return import(
        /* webpackInclude: /resources\/containers/ */
        /* webpackExclude: /loader-runner/ */
        `vendor/miaoxing/${plugin}/resources/pages/${controller}/${action}.js`
      );
    },

    loading: Loading,
  });
  return <LoadableComponent {...props}/>;
};

const App = () => (
  <BrowserRouter>
    <Switch>
      <Route exact path={$.url(':controller')} component={Component}/>
      <Route exact path={$.url(':controller/:id(\\d+)')} component={Component}/>
      <Route exact path={$.url(':controller/:action')} component={Component}/>
      <Route exact path={$.url(':controller/:id(\\d+)/:action')} component={Component}/>
      <Route component={NoMatch}/>
    </Switch>
  </BrowserRouter>
);

export default App;
