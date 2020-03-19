import {CommandModule} from 'yargs';
import * as chokidar from 'chokidar';
import * as execa from 'execa';
import log from '@gitsync/log';
import theme from 'chalk-theme';
import {ExecaReturnValue} from "execa";

let command: CommandModule = {
  handler: () => {
  }
};

command.command = 'watch-auto-completion';

command.describe = 'Watching service directories and generate auto completion when service class changed';

command.handler = async () => {
  const watcher = chokidar.watch([
    'plugins/*/src/Service/*.php',
  ]);

  watcher.on('change', async (path) => {
    log.info('change', path);

    const paths = path.split('/');
    console.log(paths[1]);

    const args = [
      'artisan',
      'g:auto-completion',
      paths[1],
    ];
    startLog(args);

    const result = await execa('php', args);
    endLog(args, result);
  });
}

let start: Date;

function startLog(args: string[]) {
  log.debug(`run command: ${args.join(' ')}`);
  start = new Date();
}

function endLog(args: string[], result: ExecaReturnValue<string>) {
  log.trace(
    'command: %s, duration: %s, exit code: %s, output: %s',
    theme.info(args[0]),
    theme.info((new Date().getMilliseconds() - start.getMilliseconds()).toString() + 'ms'),
    theme.info(result.exitCode.toString()),
    result.all,
  );
}

export default command;
