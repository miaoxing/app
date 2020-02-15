const path = require('path');
const WebpackConfig = require('@miaoxing/webpack');

module.exports = WebpackConfig.build({
  name: path.basename(__dirname),
  manifest: true,
  getEntries() {
    return {
      [this.name] : `${this.rootDir}/plugins/${this.name}/resources/pages/index.js`
    }
  }
});
