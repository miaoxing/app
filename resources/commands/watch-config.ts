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
    'plugins/*/resources/pages/**',
    'plugins/*/resources/events/**'
  ])
    .on('add', listener)
    .on('unlink', listener)
    .on('ready', () => {
      ready = true
    });

  function listener(path: string) {
    if (!ready) {
      return;
    }

    // plugins[0]/admin[1]/resources[2]/pages[3]/admin[4]/login/Index.js
    const type = path.split('/')[4] === 'admin' ? 'admin' : 'app';
    generate(type);
  }
}

export default command;
