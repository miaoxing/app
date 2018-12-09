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
  pages += `  '${file.substr(length)}': () => import('${file}'),\n`;
});
pages += '}';

fs.writeFileSync(`data/cache/${name}-pages.js`, pages);
