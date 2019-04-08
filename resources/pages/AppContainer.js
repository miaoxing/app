import React from 'react';
import {hot} from 'react-hot-loader';
import App from "components/App";
import NoMatch from "components/NoMatch";
import configs from 'data/cache/app-pages';

class AppContainer extends React.Component {
  importPage(plugin, controller, action) {
    const path = `${plugin}/${controller}/${action}`;
    return configs.pages[path] ? configs.pages[path]() : new Promise(resolve => resolve(NoMatch));
  }

  render() {
    return <App importPage={this.importPage} {...configs}/>;
  }
}

export default hot(module)(AppContainer);

