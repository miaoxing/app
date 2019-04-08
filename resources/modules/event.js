import hoook from 'hoook';

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
    this.configs.events[event].forEach(pluginId => {
      if (!wei.pluginIds.includes(pluginId)) {
        return;
      }

      const promise = this.configs.plugins[pluginId]();
      promises.push(promise);
      promise.then(fns => {
        this.on(event, fns.default[event]);
      });
    });
    Promise.all(promises).then(fn);
  }
}

export default new Event;
