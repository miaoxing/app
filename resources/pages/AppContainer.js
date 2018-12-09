import React from 'react';
import {hot} from 'react-hot-loader';
import App from "components/App";
import pages from 'data/cache/app-pages';

class AppContainer extends React.Component {
  importPage(plugin, controller, action) {
    return pages[`${plugin}/${controller}/${action}`]();
  }

  render() {
    return <App importPage={this.importPage} pages={pages}/>;
  }
}

export default hot(module)(AppContainer);

