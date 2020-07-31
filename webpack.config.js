const path = require('path');
const WebpackConfig = require('@mxjs/webpack');
const {generateAntdVars, generateBootstrapVars} = require('@mxjs/style/utils');

const theme = require('@mxjs/style/theme-preset');
const name = path.basename(__dirname);

module.exports = WebpackConfig.build({
  name,
  manifest: true,
  lessLoaderOptions: {
    lessOptions: {
      modifyVars: generateAntdVars(theme),
      javascriptEnabled: true
    }
  },
  sassLoaderOptions: {
    prependData: function () {
      return generateBootstrapVars(theme) + `@import "plugins/${name}/scss/config";`;
    }
  },
  getEntries() {
    return {
      [name]: `${this.rootDir}/plugins/${name}/modules/app.js`
    };
  }
});
