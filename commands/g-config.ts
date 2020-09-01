import {CommandModule} from 'yargs';
import * as glob from 'glob';
import * as fs from 'fs-extra';
import * as chalk from 'chalk';
import * as path from 'path';

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

command.handler = async (argv: any) => {
  await generate(argv.type);
}

const validExts = ['.js', '.ts', '.tsx'];

async function generate(name: string) {
  const content = 'export default ' + varExport(Object.assign(
    await generatePages(name),
    await generateEvents(name)
  )) + ';\n';

  await fs.writeFile(`storage/configs/${name}.js`, content);
}

let pageCount = 0;

async function generatePages(name: string) {
  pageCount = 0;
  let pages = {};
  const dirs = glob.sync(`plugins/*/pages`);
  for (const dir of dirs) {
    pages = await scanPages(name, dir, dir, pages);
  }

  console.log(chalk.green(`Founds ${pageCount} page files.`));
  return {router: {pages}};
}

async function generateEvents(name: string) {
  const DEFAULT_PRIORITY = 100;

  const plugins: any = {};
  const eventFiles = glob.sync(`plugins/*/events/${name === 'admin' ? 'admin/' : ''}events.js`);
  console.log(chalk.green(`Founds ${eventFiles.length} event files.`));

  eventFiles.forEach(file => {
    const plugin = file.split('/')[1];
    plugins[plugin] = Symbol(`import('${file}')`);
  });

  // 附加事件对应关系
  const events: any = {};
  for (const file of eventFiles) {
    const plugin = file.split('/')[1];

    // NOTE: 先直接解析字符串
    const text = await fs.readFile(file, 'utf8');
    const regex = new RegExp('\n  on(.+?)\\(', 'g');
    let match;
    do {
      match = regex.exec(text);
      if (match) {
        const [, event, priority = DEFAULT_PRIORITY] = /(.+?)(\d+)?$/.exec(match[1]);
        if (typeof events[event] === 'undefined') {
          events[event] = {};
        }
        if (typeof events[priority] === 'undefined') {
          events[event][priority] = [];
        }
        events[event][priority].push(plugin);
      }
    } while (match);
  }

  return {event: {plugins, events}};
}

async function scanPages(name: string, rootDir: string, dir: string, pages: any = {}): Promise<any> {
  const files = await fs.readdir(dir);

  for (const file of files) {
    // 首级目录区分 app 和 admin
    if (rootDir === dir) {
      if (name === 'admin' && file !== 'admin') {
        continue;
      }
      if (name !== 'admin' && file === 'admin') {
        continue;
      }
    }

    const fullPath = path.join(dir, file);
    if ((await fs.lstat(fullPath)).isDirectory()) {
      const result = await scanPages(name, rootDir, fullPath);
      if (Object.keys(result).length > 0) {
        // Ignore empty array
        pages['/' + file] = result;
      }
      continue;
    }

    const parsedPath = path.parse(file);

    // Ignore file start with underscore
    if (!validExts.includes(parsedPath.ext) || parsedPath.name.substr(0, 1) === '_') {
      continue;
    }

    pages = await addPages(pages, parsedPath.name, fullPath);
  }

  return pages;
}

async function addPages(pages: any, name: string, file: string) {
  pageCount++;

  let page;
  if (name === 'index') {
    page = pages;
    page['index'] = true;
  } else {
    pages['/' + name] = {};
    page = pages['/' + name];
  }

  page['import'] = Symbol(`import('${file}')`);

  const text = await fs.readFile(file, 'utf8');

  // 读取布局配置
  const regex = new RegExp('\n \\* @layout (.+?)\n');
  const match = regex.exec(text);
  if (match) {
    if (match[1] === 'false') {
      page['layout'] = false;
    } else {
      page['layout'] = Symbol(`import('${match[1]}')`);
    }
  }

  // 读取共用配置
  const shareRegex = new RegExp('\n \\* @share (.+?)\n');
  const shareMatch = shareRegex.exec(text);
  if (shareMatch) {
    let nextPages = pages;
    shareMatch[1].split('/').forEach(name => {
      nextPages['/' + name] = {};
      nextPages = nextPages['/' + name];
    });
    nextPages['import'] = Symbol(`import('${file}')`);
  }

  return pages;
}

function varExport(variable: any, indent = '', level = 0) {
  const nextLevel = level + 1;
  switch (Object.prototype.toString.call(variable)) {
    case '[object String]':
      return `'${variable}'`;

    case '[object Object]':
      let result: string[] = [];
      Object.keys(variable).forEach(key => {
        result.push(indent + '  ' + varExport(key) + ': ' + varExport(variable[key], `${indent}  `, nextLevel) + ',');
      });
      return `{\n${result.join("\n")}\n${indent}}`;

    case '[object Array]':
      let array: string[] = [];
      variable.forEach((value: any) => {
        array.push(varExport(value));
      });
      return `[${array.join(', ')}]`;

    case '[object Symbol]':
      return variable.description;

    case '[object Boolean]':
      return (variable ? 'true' : 'false');

    case '[object Number]':
      return variable;

    default:
      throw new Error(`Unsupported type: ${Object.prototype.toString.call(variable)}`);
  }
}

export default command;
export {generate};
