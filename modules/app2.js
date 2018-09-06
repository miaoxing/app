class App2 {
  constructor() {
    this._namesapce = '';
    this._controller = '';
    this._action = '';
    this._id = '';
  }

  url(...args) {
    return $.url(...args);
  }

  curUrl() {
    return window.location.pathname;
  }

  curIndexUrl() {
    return this.url((this.namespace ? (this.namespace + '/') : '') + this.controller);
  }

  curNewUrl() {
    return this.curIndexUrl() + '/new';
  }

  curEditUrl(id = null) {
    return this.curIndexUrl() + '/' + (id || this.id) + '/edit';
  }

  curShowUrl(id = null) {
    return this.curIndexUrl() + '/' + (id || this.id);
  }

  curDestroyUrl(id = null) {
    return this.curIndexUrl() + '/' + (id || this.id) + '/destroy';
  }

  curFormUrl() {
    return this.curIndexUrl() + '/' + (this.id ? 'update' : 'create');
  }

  get namespace() {
    return this._namespace;
  };

  set namespace(namespace) {
    this._namespace = namespace;
  }

  get controller() {
    return this._controller;
  };

  set controller(controller) {
    this._controller = controller;
  }

  get action() {
    return this._action;
  };

  set action(action) {
    this._action = action;
  }

  get id() {
    return this._id;
  };

  set id(id) {
    this._id = id;
  }
}

const app2 = new App2();

export default app2;
export const url = app2.url;
