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
      javascriptEnabled: true,
    },
  },
  sassLoaderOptions: {
    // NOTE: 使用回调（即使返回值为空），实现使用 dart-sass 时，js 中加载的 sass 会消失不见
    additionalData: generateBootstrapVars(theme) + `@import "plugins/${name}/scss/config";`,
  },
  getEntries() {
    return {
      [name]: `${this.rootDir}/plugins/${name}/modules/app.js`,
    };
  },
});
