import {Arguments, CommandModule} from 'yargs';
import * as glob from 'glob';
import * as fs from 'fs';
import * as chalk from 'chalk';

function lcfirst(word: string) {
  if (!word) {
    return word;
  }
  return word[0].toLowerCase() + word.substr(1);
}

let command: CommandModule = {
  handler: () => {
  }
};

command.command = 'g-config [type]';

command.describe = 'Generate config';

command.builder = {
  type: {
    describe: '要生成的类型',
    default: 'app',
  },
};

command.handler = (argv: any) => {
  generate(argv.type);
}

function generate(name: string) {
  const DEFAULT_PRIORITY = 100;
  const prefix = 'plugins';

  const files = glob.sync(prefix + `/*/pages/${name === 'admin' ? 'admin/' : ''}*/*.js`);
  console.log(chalk.green(`Founds ${files.length} page files.`));

  // TODOP3 参照 Miaoxing\Config\Service\Config::varExport 生成对象
  let content = 'export default {\n';

  // 附加页面配置
  const layouts: any = {};
  content += `  'pages': {\n`;
  files.forEach(file => {
    const parts = file.split('/');
    const last = parts[parts.length - 1];
    // plugins/plugin/pages/controller/action.js
    // => plugin/controller/action
    content += `    '${parts[1]}/${parts[parts.length - 2]}/${last.substring(0, last.length - 3)}': () => import('${file}'),\n`;

    const text = fs.readFileSync(file, 'utf8');
    const regex = new RegExp('\n \\* @layout (.+?)\n');
    const match = regex.exec(text);
    if (match) {
      const page = `${parts[parts.length - 2]}/${lcfirst(last.substring(0, last.length - 3))}`;
      layouts[page] = match[1];
    }
  });

  content += '  },\n';

  // 附加布局
  content += `  'layouts': {\n`;
  Object.keys(layouts).forEach(key => {
    content += `    '${key}': `;
    if (layouts[key] === 'false') {
      content += 'false,\n';
    } else {
      content += `() => import('${layouts[key]}'),\n`
    }
  });
  content += '  },';

  // 附加事件入口
  content += `\n  'plugins': {\n`;
  const eventFiles = glob.sync(prefix + `/*/events/${name === 'admin' ? 'admin/' : ''}events.js`);
  console.log(chalk.green(`Founds ${eventFiles.length} event files.`));

  eventFiles.forEach(file => {
    const parts = file.split('/');
    content += `    '${parts[1]}': () => import('${file}'),\n`;
  });
  content += '  },';

  // 附加事件对应关系
  const events: any = {};
  eventFiles.forEach(file => {
    const plugin = file.split('/')[1];

    // NOTE: 需通过babel才能导入？先直接解析字符串
    const text = fs.readFileSync(file, 'utf8');
    const regex = new RegExp('\n  on(.+?)\\(', 'g');
    let match;
    do {
      match = regex.exec(text);
      if (match) {
        const [, event, priority = DEFAULT_PRIORITY] = /(.+?)((\d+))?$/.exec(lcfirst(match[1]));
        if (typeof events[event] === 'undefined') {
          events[event] = {};
        }
        if (typeof events[priority] === 'undefined') {
          events[event][priority] = [];
        }
        events[event][priority].push(plugin);
      }
    } while (match);
  });
  const eventContent = JSON.stringify({events: events}, null, 2).replace(/"/g, "'");

  content += '\n  ' + eventContent.substring(4, eventContent.length - 1);

  content += '};\n';

  fs.writeFileSync(`data/configs/${name}.js`, content);
}

export default command;
export {generate};
