import hoook from 'hoook';
import configs from 'data/cache/app-pages';

const ee = hoook();

class Event {
  loaded = {};

  on = ee.hook;
  off = ee.unhook;

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

    if (typeof configs.events[event] === 'undefined') {
      fn();
      return;
    }

    const promises = [];
    configs.events[event].forEach(pluginId => {
      if (!wei.pluginIds.includes(pluginId)) {
        return;
      }

      const promise = configs.plugins[pluginId]();
      promises.push(promise);
      promise.then(fns => {
        this.on(event, fns.default[event]);
      });
    });
    Promise.all(promises).then(fn);
  }
}

export default new Event;
