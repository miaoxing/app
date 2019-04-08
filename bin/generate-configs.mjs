import glob from 'glob';
import fs from 'fs';
import chalk from 'chalk';

const name = process.argv[2] || 'app';
const prefix = 'vendor/miaoxing';
const length = prefix.length;

const files = glob.sync(prefix + `/*/resources/pages/${name === 'admin' ? 'admin/' : ''}*/*.js`);
console.log(chalk.green(`Founds ${files.length} page files.`));

let content = 'export default {\n';

// 附加页面配置
content += `  'pages': {\n`;
files.forEach(file => {
  const parts = file.split('/');
  const last = parts[parts.length - 1];
  // vendor/miaoxing/plugin/resources/pages/controller/action.js
  // => plugin/controller/action
  content += `    '${parts[2]}/${parts[parts.length - 2]}/${last.substring(0, last.length - 3)}': () => import('${file}'),\n`;
});
content += '  },';

// 附加事件入口
content += `\n  'plugins': {\n`;
const eventFiles = glob.sync(prefix + `/*/resources/events/${name === 'admin' ? 'admin/' : ''}events.js`);
console.log(chalk.green(`Founds ${eventFiles.length} event files.`));

eventFiles.forEach(file => {
  const parts = file.split('/');
  content += `    '${parts[2]}': () => import('${file}'),\n`;
});
content += '  },';

// 附加事件对应关系
const events = {};
eventFiles.forEach(file => {
  const plugin = file.split('/')[2];

  // NOTE: 需通过babel才能导入？先直接解析字符串
  const text = fs.readFileSync(file, 'utf8');
  const regex = new RegExp('\n  (.+?)\\(\\) {\n', 'g');
  let match;
  do {
    match = regex.exec(text);
    if (match) {
      if (typeof events[match[1]] === 'undefined') {
        events[match[1]] = [];
      }
      events[match[1]].push(plugin);
    }
  } while (match);
});
const eventContent = JSON.stringify({events: events}, null, 2).replace(/"/g, "'");

content += '\n  ' + eventContent.substring(4, eventContent.length - 1);

content += '};\n';

fs.writeFileSync(`data/configs/${name}.js`, content);
