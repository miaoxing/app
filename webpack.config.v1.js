const path = require('path');
const WebpackConfig = require('../app/modules/webpack-config');

module.exports = WebpackConfig.build({
  name: 'app-v1',
  getEntries() {
    return {
      [this.name] : `${this.rootDir}/vendor/miaoxing/app/resources/app-v1`
    }
  }
});
