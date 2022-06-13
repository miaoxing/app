const WebpackConfig = require('@mxjs/webpack');
const {generateAntdVars} = require('@mxjs/style/utils');

const theme = require('@mxjs/style/theme-preset');

module.exports = WebpackConfig.build({
  name: 'index',
  entry: 'plugins/app/modules/app.js',
  lessLoaderOptions: {
    lessOptions: {
      modifyVars: generateAntdVars(theme),
      javascriptEnabled: true,
    },
  },
});
