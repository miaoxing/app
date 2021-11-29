const WebpackConfig = require('@mxjs/webpack');
const {generateAntdVars} = require('@mxjs/style/utils');

const theme = require('@mxjs/style/theme-preset');
const name = 'index';

module.exports = WebpackConfig.build({
  name,
  manifest: true,
  lessLoaderOptions: {
    lessOptions: {
      modifyVars: generateAntdVars(theme),
      javascriptEnabled: true,
    },
  },
  getEntries() {
    return {
      [name]: `${this.rootDir}/plugins/app/modules/app.js`,
    };
  },
});
