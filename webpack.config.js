const WebpackConfig = require('@mxjs/webpack');

const config = WebpackConfig.build({
  name: 'index',
  entry: 'plugins/app/modules/app.js',
});

module.exports = config;
