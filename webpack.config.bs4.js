const path = require('path');
const WebpackConfig = require('../app/modules/webpack-config');

module.exports = WebpackConfig.build({
  name: 'app-bs4',
  externals: {},
  getEntries() {
    return {
      [this.name] : `${this.rootDir}/vendor/miaoxing/app/resources/pages/index-bs4`
    }
  }
});
