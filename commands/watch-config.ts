import {CommandModule} from 'yargs';
import * as chokidar from 'chokidar';
import {generate} from './g-config';

let command: CommandModule = {
  handler: () => {
  }
};

command.command = 'watch-config';

command.describe = 'Watching config';

command.handler = async () => {
  let ready = false;

  chokidar.watch([
    'plugins/*/pages/**',
    'plugins/*/events/**'
  ])
    .on('add', listener)
    .on('unlink', listener)
    .on('change', listener)
    .on('ready', () => {
      ready = true
    });

  function listener(path: string) {
    if (!ready) {
      return;
    }

    // plugins[0]/admin[1]/pages[2]/admin[3]/login/index.js
    const type = path.split('/')[3] === 'admin' ? 'admin' : 'app';
    generate(type);
  }
}

export default command;
