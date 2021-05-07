import {CommandModule} from 'yargs';
import {watchGAutoCompletion} from '@miaoxing/plugin/commands/watch-php';
import log from '@gitsync/log';

const command: Partial<CommandModule> = {};

command.command = 'watch-auto-completion';

command.describe = 'Watching service directories and generate auto completion when service class changed';

command.handler = async () => {
  log.warn('The `watch-auto-completion` command is deprecated. use `watch-php` instead.');
  await watchGAutoCompletion();
};

export default command;
