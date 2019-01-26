import React from 'react';
import {hot} from 'react-hot-loader';
import App from "components/App";
import pages from 'data/cache/app-pages';
import NoMatch from "components/NoMatch";

class AppContainer extends React.Component {
  importPage(plugin, controller, action) {
    const path = `${plugin}/${controller}/${action}`;
    return pages[path] ? pages[path]() : new Promise(resolve => resolve(NoMatch));
  }

  render() {
    return <App importPage={this.importPage} pages={pages}/>;
  }
}

export default hot(module)(AppContainer);

