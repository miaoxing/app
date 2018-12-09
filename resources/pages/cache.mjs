import glob from 'glob';
import fs from 'fs';
import chalk from 'chalk';

const name = process.argv[2] || 'app';
const prefix = 'vendor/miaoxing';
const length = prefix.length;

const files = glob.sync(prefix + `/*/resources/pages/${name === 'admin' ? 'admin/' : ''}*/*.js`);
console.log(chalk.green(`Founds ${files.length} files.`));

let pages = "export default {\n";
files.forEach(file => {
  const parts = file.split('/');
  const last = parts[parts.length - 1];
  // vendor/miaoxing/plugin/resources/pages/controller/action.js
  // => plugin/controller/action
  pages += `  '${parts[2]}/${parts[parts.length - 2]}/${last.substring(0, last.length - 3)}': () => import('${file}'),\n`;
});
pages += '}';

fs.writeFileSync(`data/cache/${name}-pages.js`, pages);
