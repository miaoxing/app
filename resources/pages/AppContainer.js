import React from 'react'
import {hot} from 'react-hot-loader';
import App from 'vendor/miaoxing/app/modules/app';

class AppContainer extends React.Component {
  importPage(plugin, controller, action) {
    return import(
      /* webpackChunkName: "[request]" */
      /* webpackInclude: /resources\/pages/ */
      `vendor/miaoxing/${plugin}/resources/pages/${controller}/${action}.js`
      );
  }

  getPages() {
    return require.context('vendor/miaoxing', true, /^\.\/.*\/resources\/pages\/(.+?)\/(.+?)\.js$/, 'lazy');
  }

  render() {
    return <App
      importPage={this.importPage}
      pages={this.getPages()}
    />
  }
}

export default hot(module)(AppContainer);

