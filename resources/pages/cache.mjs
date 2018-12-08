import glob from 'glob';
import fs from 'fs';

const prefix = 'vendor/miaoxing';
const length = prefix.length;

const files = glob.sync(prefix + '/*/resources/pages/*/*.js');

let pages = "export default {\n";
files.forEach(file => {
  pages += `  '${file.substr(length)}': () => import('${file}'),\n`;
});
pages += '}';

fs.writeFileSync('data/cache/app-pages.js', pages);
