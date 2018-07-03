const path = require('path');
const WebpackConfig = require('../app/modules/webpack-config');

module.exports = WebpackConfig.build({
  name: path.basename(__dirname),
  manifest: true,
  getEntries() {
    return {
      [this.name] : `${this.rootDir}/vendor/miaoxing/${this.name}/resources/pages/index.js`
    }
  }
});
