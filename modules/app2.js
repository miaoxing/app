class App2 {
  constructor() {
    this._namesapce = '';
    this._controller = '';
    this._action = '';
  }

  url(...args) {
    return $.url(...args);
  }

  curIndexUrl() {
    return this.url((this.namespace ? (this.namespace + '/') : '') + this.controller);
  }

  curNewUrl() {
    return this.curIndexUrl() + '/new';
  }

  curEditUrl(id) {
    return this.curIndexUrl() + '/' + id + '/edit';
  }

  curDestroyUrl(id) {
    return this.curIndexUrl() + '/' + id + '/destroy';
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
}

const app2 = new App2();

export default app2;
