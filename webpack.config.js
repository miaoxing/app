const path = require('path');
const WebpackConfig = require('../app/modules/webpack-config');

module.exports = WebpackConfig.build({
  name: path.basename(__dirname),
  getEntries() {
    const entries = {};

    // 初始化通用的模块
    entries[this.name] = [];

    // https://github.com/gaearon/react-hot-loader
    if (this.isHot) {
      entries[this.name].push('react-hot-loader/patch');
    }

    // 不使用完整路径将提示 Module not found: Error
    entries[this.name].push(this.rootDir + `/vendor/miaoxing/${this.name}/resources/pages/index.js`);

    return entries;
  }
});
