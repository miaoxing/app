import React from 'react';
import {BrowserRouter, Route, Switch} from 'react-router-dom';
import Loading from 'components/Loading';
import NoMatch from 'components/NoMatch';
import ucfirst from 'ucfirst';
import Loadable from 'react-loadable';
import app2 from 'app2';

class App extends React.Component {
  constructor(props) {
    super(props);

    // 解析出页面路径中的插件和控制对应关系
    // 如 ./article/resources/pages/articles/Edit.js => articles => article
    // 如 ./user/resources/pages/admin/users/Edit.js => users => user
    this.controllerMap = {};
    this.props.pages.keys().forEach((key) => {
      const parts = key.split('/');
      this.controllerMap[parts[parts.length - 2]] = parts[1];
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
        app2.namespace = props.match.params.namespace;
        app2.controller = controller;
        app2.action = action;
        app2.id = props.match.params.id;

        // TODO Nav也升级为React
        $(document).trigger('pageLoad', props);
        this.handleLoad(props);
        if (this.deep > 0) {
          $('.js-back').show();
        } else {
          $('.js-back').hide();
        }

        return this.props.importPage(plugin, controller, action);
      },
      loading: Loading
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
    return <BrowserRouter>
      <Switch>
        {/* TODO /admin/login */}
        <Route exact path={app2.url(':namespace(admin)?/:controller/:id(\\d+)?/:action?')} component={Component}/>
        <Route component={NoMatch}/>
      </Switch>
    </BrowserRouter>;
  }
}

export default App;
