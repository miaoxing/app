const path = require('path');
const WebpackConfig = require('@miaoxing/webpack');
const {generateAntdVars, generateBootstrapVars} = require('@miaoxing/style/utils');

const theme = require('@miaoxing/style/theme-preset');
const name = path.basename(__dirname);

module.exports = WebpackConfig.build({
  name,
  manifest: true,
  lessLoaderOptions: {
    lessOptions: {
      modifyVars: generateAntdVars(theme),
      javascriptEnabled: true,
    },
  },
  sassLoaderOptions: {
    prependData: function () {
      return generateBootstrapVars(theme) + `@import "plugins/${name}/resources/scss/config";`;
    }
  },
  getEntries() {
    return {
      [name]: `${this.rootDir}/plugins/${name}/resources/pages/index.js`
    }
  }
});
