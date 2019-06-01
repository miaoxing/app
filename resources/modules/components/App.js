import React from 'react';
import {BrowserRouter, Route, Switch, Link} from 'react-router-dom';
import Loading from 'components/Loading';
import NoMatch from 'components/NoMatch';
import ucfirst from 'ucfirst';
import Loadable from 'react-loadable';
import {ThemeProvider} from 'styled-components';
import app from 'app';
import theme from 'theme';
import event from 'event';
import {Component} from "react";
import {Modal, Button} from "react-bootstrap";

class App extends React.Component {
  render() {
    return <ThemeProvider theme={theme}>
      <BrowserRouter>
        <Route render={(props) => (<ModalSwitch {...props} {...this.props}/>)}/>
      </BrowserRouter>
    </ThemeProvider>;
  }
}

/**
 * @link https://reacttraining.com/react-router/web/example/modal-gallery
 */
class ModalSwitch extends Component {
  static defaultProps = {
    pages: {},
    plugins: {},
    events: {},
  };

  previousLocation = this.props.location;

  constructor(props) {
    super(props);

    // 初始化事件
    event.setConfigs(props);

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

  componentWillUpdate(nextProps) {
    let {location} = this.props;

    // set previousLocation if props.location is not modal
    if (
      nextProps.history.action !== "POP" &&
      (!location.state || !location.state.modal)
    ) {
      this.previousLocation = this.props.location;
    }
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
    const controller = this.getController(props.match.params);
    const action = this.getAction(props.match.params);
    const plugin = this.controllerMap[controller];

    app.plugin = plugin;
    app.namespace = props.match.params.namespace;
    app.controller = controller;
    app.action = action;
    app.id = props.match.params.id;
    app.history = props.history;

    const LoadableComponent = this.createLoadableComponent(props);

    return <LoadableComponent {...props}/>;
  }

  components = [];

  createLoadableComponent(props) {
    const id = app.controller + '/' + app.action;
    if (!this.components[id]) {
      this.components[id] = Loadable({
        loader: () => {
          app.trigger('pageLoad', props);

          // TODO Nav也升级为React
          if (typeof $ !== 'undefined') {
            this.handleLoad(props);
            if (this.deep > 0) {
              $('.js-back').show();
            } else {
              $('.js-back').hide();
            }
          }

          return this.importPage(app.plugin, app.controller, app.action);
        },
        loading: Loading
      });
    }
    return this.components[id];
  }

  importPage(plugin, controller, action) {
    let path = `${plugin}/${controller}/${action}`;
    if (typeof wei.pageMap[path] !== 'undefined') {
      path = wei.pageMap[path];
    }
    return this.props.pages[path] ? this.props.pages[path]() : new Promise(resolve => resolve(NoMatch));
  }

  handleLoad(props) {
    if (props.history.action === 'POP') {
      this.deep--;
    } else if (props.history.action === 'PUSH') {
      this.deep++;
    } // ignore REPLACE
  }

  isModal() {
    let {location} = this.props;
    return !!(
      location.state &&
      location.state.modal &&
      this.previousLocation !== location
    ); // not initial render
  }

  render() {
    const isModal = this.isModal();
    const Component = this.loadableComponent;

    return (
      <>
        <Switch location={isModal ? this.previousLocation : location}>
          <Route exact path={app.url(':namespace(admin)?/:controller/:id(\\d+)?/:action?')} component={Component}/>
          <Route exact path={wei.appUrl} component={Component}/>
          <Route component={NoMatch}/>
        </Switch>
        {isModal ?
          <Route exact path={app.url(':namespace(admin)?/:controller/:id(\\d+)?/:action?')} render={(props) => {
            return <ModalView {...props} component={Component}/>;
          }}/> : null}
      </>
    );
  }
}

function ModalView(props) {
  let back = e => {
    e && e.stopPropagation();
    props.history.goBack();
  };

  const Component = props.component;

  return (
    <Modal show onHide={back}>
      <Modal.Header closeButton>
        <Modal.Title>Modal heading</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        <Component {...props}/>
      </Modal.Body>
      <Modal.Footer>
        <Button variant="primary" onClick={back}>Back</Button>
      </Modal.Footer>
    </Modal>
  );
}

export default App;
