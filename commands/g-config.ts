import {Arguments, CommandModule} from 'yargs';
import * as glob from 'glob';
import * as fs from 'fs-extra';
import * as chalk from 'chalk';
import * as path from 'path';
// @ts-ignore 缺少类型声明
import * as lcfirst from 'lcfirst';
import * as _ from 'lodash';

interface GConfigArgv extends Arguments {
  type: string
}

interface Plugins {
  [key: string]: symbol
}

interface Handlers {
  [key: string]: {
    [key: string]: string[]
  }
}

interface Pages {
  index?: boolean
  import?: symbol
  layout?: symbol | false

  [key: string]: boolean | symbol | string | this
}

const command: Partial<CommandModule> = {};

command.command = 'g-config [type]';

command.describe = 'Generate config';

command.builder = {
  type: {
    describe: '要生成的类型',
    default: 'app',
  },
};

command.handler = async (argv: GConfigArgv) => {
  await generate(argv.type);
};

// 生成的文件相对于根目录的路径
const relativePath = '../../';

const validExts = ['.js', '.jsx', '.ts', '.tsx'];

async function generate(name: string): Promise<void> {
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
  const dirs = glob.sync('plugins/*/pages');
  for (const dir of dirs) {
    pages = await scanPages(name, dir, dir, pages);
  }

  console.log(chalk.green(`Founds ${pageCount} page files.`));
  return {router: {pages}};
}

async function generateEvents(name: string) {
  const DEFAULT_PRIORITY = 100;

  const plugins: Plugins = {};
  const eventFiles = glob.sync(`plugins/*/events/${name === 'admin' ? 'admin/' : ''}events.js`);
  console.log(chalk.green(`Founds ${eventFiles.length} event files.`));

  eventFiles.forEach((file: string) => {
    const plugin = file.split('/')[1];
    plugins[plugin] = Symbol(`() => import('${relativePath}${file}')`);
  });

  // 附加事件对应关系
  const handlers: Handlers = {};
  for (const file of eventFiles) {
    const plugin = file.split('/')[1];

    // NOTE: 先直接解析字符串
    const text = await fs.readFile(file, 'utf8');
    const regex = new RegExp('\\s+(?:async)?\\s+on(.+?)\\(', 'g');
    let match;
    do {
      match = regex.exec(text);
      if (match) {
        const [, event, priority = DEFAULT_PRIORITY] = /(.+?)(\d+)?$/.exec(lcfirst(match[1]));
        if (typeof handlers[event] === 'undefined') {
          handlers[event] = {};
        }
        if (typeof handlers[event][priority] === 'undefined') {
          handlers[event][priority] = [];
        }
        handlers[event][priority].push(plugin);
      }
    } while (match);
  }

  return {plugin: {events: {plugins, handlers}}};
}

async function scanPages(name: string, rootDir: string, dir: string, pages: Pages = {}): Promise<Pages> {
  const files = await fs.readdir(dir);

  // 将动态的路由(如 [id])排到最后面
  files.sort((a, b) => {
    if (a.startsWith('[')) {
      return 1;
    }
    if (b.startsWith('[')) {
      return -1;
    }
    return 0;
  });

  for (const file of files) {
    // 忽略移动端目录，由 taro-plugin-miaoxing 去生成
    if ('m' === file) {
      continue;
    }

    // 首级目录区分 app 和 admin
    if (rootDir === dir) {
      if (name === 'admin' && file !== 'admin') {
        continue;
      }
      if (name !== 'admin' && file === 'admin') {
        continue;
      }
    }

    // Ignore file/dir start with underscore or dot
    if (['_', '.'].includes(file.substring(0, 1))) {
      continue;
    }

    const fullPath = path.join(dir, file);
    if ((await fs.lstat(fullPath)).isDirectory()) {
      const result = await scanPages(name, rootDir, fullPath);
      // Ignore empty array
      if (Object.keys(result).length > 0) {
        const key = '/' + file;
        if (typeof pages[key] !== 'undefined') {
          pages[key] = _.merge(pages[key], result);
        } else {
          pages[key] = result;
        }
      }
      continue;
    }

    const parsedPath = path.parse(file);

    if (!validExts.includes(parsedPath.ext) || parsedPath.name.substr(-5) === '.test') {
      continue;
    }

    pages = await addPages(pages, parsedPath.name, fullPath);
  }

  return pages;
}

async function addPages(pages: Pages, name: string, file: string) {
  pageCount++;

  let page: Pages;
  if (name === 'index') {
    page = pages;
    page['index'] = true;
  } else {
    pages['/' + name] = {};
    page = pages['/' + name] as Pages;
  }

  page['import'] = Symbol(`() => import('${relativePath}${file}')`);

  const text = await fs.readFile(file, 'utf8');

  // 读取布局配置
  // eslint-disable-next-line no-control-regex
  const regex = new RegExp('\n \\* @layout (.+?)\n');
  const match = regex.exec(text);
  if (match) {
    if (match[1] === 'false') {
      page['layout'] = false;
    } else {
      page['layout'] = Symbol(`() => import('${relativePath}${match[1]}')`);
    }
  }

  // 读取共用配置
  // eslint-disable-next-line no-control-regex
  const shareRegex = new RegExp('\n \\* @share (.+?)\n');
  const shareMatch = shareRegex.exec(text);
  if (shareMatch) {
    let nextPages = pages;
    shareMatch[1].split('/').forEach(name => {
      if (!nextPages['/' + name]) {
        nextPages['/' + name] = {};
      }
      nextPages = nextPages['/' + name] as Pages;
    });
    nextPages['import'] = Symbol(`() => import('${relativePath}${file}')`);
  }

  return pages;
}

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function varExport(variable: any, indent = '', level = 0) {
  const nextLevel = level + 1;
  switch (Object.prototype.toString.call(variable)) {
    case '[object String]':
      return `'${variable}'`;

    case '[object Object]': {
      const result: string[] = [];
      Object.keys(variable).forEach(key => {
        result.push(indent + '  ' + varExport(key) + ': ' + varExport(variable[key], `${indent}  `, nextLevel) + ',');
      });
      return `{\n${result.join('\n')}\n${indent}}`;
    }

    case '[object Array]': {
      const array: string[] = [];
      // eslint-disable-next-line @typescript-eslint/no-explicit-any
      variable.forEach((value: any) => {
        array.push(varExport(value));
      });
      return `[${array.join(', ')}]`;
    }

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
