const WebpackConfig = require('@mxjs/webpack');
const {generateAntdVars} = require('@mxjs/style/utils');
const theme = require('@mxjs/style/theme-preset');

const config = WebpackConfig.build({
  name: 'index',
  entry: 'plugins/app/modules/app.js',
});

config.module.rules.map(rule => {
  rule.use && rule.use.map(use => {
    if (use.loader === 'less-loader') {
      use.options = {
        lessOptions: {
          modifyVars: generateAntdVars(theme),
          javascriptEnabled: true,
        },
      };
    }
  });
});

module.exports = config;
