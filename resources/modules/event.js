import hoook from 'hoook';
import ucfirst from 'locutus/php/strings/ucfirst';

const DEFAULT_PRIORITY = 100;
const ee = hoook();

class Event {
  configs = {};
  loaded = {};

  on = ee.hook;
  off = ee.unhook;

  setConfigs(configs) {
    this.configs = configs;
  }

  trigger(event, data) {
    this.loadEvent(event, () => {
      ee.fire(event, data);
    });
  }

  loadEvent(event, fn) {
    if (this.loaded[event]) {
      fn();
      return;
    }
    this.loaded[event] = true;

    if (typeof this.configs.events[event] === 'undefined') {
      fn();
      return;
    }

    const promises = [];
    Object.keys(this.configs.events).forEach(event => {
      const priorityPlugin = this.configs.events[event];
      Object.keys(priorityPlugin).forEach(priority => {
        priorityPlugin[priority].forEach(pluginId => {
          if (!wei.pluginIds.includes(pluginId)) {
            return;
          }

          const promise = this.configs.plugins[pluginId]();
          promises.push(promise);
          promise.then(fns => {
            priority = parseInt(priority, 10);
            const method = 'on' + ucfirst(priority === DEFAULT_PRIORITY ? event : (event + priority));
            this.on(event, fns.default[method], priority);
          });
        })
      });
    });
    Promise.all(promises).then(fn);
  }
}

export default new Event;
