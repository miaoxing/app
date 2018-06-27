export default class App {
  constructor() {
    this.loadEvents();
  }

  loadEvents() {
    const events = require.context('vendor/miaoxing', true, /^\.\/.*\/resources\/events\/events\.(\w+)$/);
    events.keys().forEach((key) => {
      if (wei.pluginIds.indexOf(key.split('/')[1]) !== -1) {
        events(key).default();
      }
    });
  }
}
