import React from 'react';
import {hot} from 'react-hot-loader';
import App from "components/App";

class AppContainerBs4 extends React.Component {
  importPage(plugin, controller, action) {
    return import(
      /* webpackChunkName: "[request]" */
      /* webpackInclude: /resources\/pages-bs4\/[^\/]+\/[^\/]+\.js$/ */
      `vendor/miaoxing/${plugin}/resources/pages-bs4/${controller}/${action}.js`
    );
  }

  getPages() {
    return require.context('vendor/miaoxing', true, /^\.\/.*\/resources\/pages-bs4\/(?!admin).*\/(.+?)\.js$/, 'lazy');
  }

  render() {
    return <App
      importPage={this.importPage}
      pages={this.getPages()}
    />;
  }
}

export default hot(module)(AppContainerBs4);

