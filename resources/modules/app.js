import appendUrl from 'append-url';

class App {
  constructor() {
    this._namesapce = '';
    this._controller = '';
    this._action = '';
    this._id = '';
    this._baseUrl = '';
  }

  url(url = '', argsOrParam, params) {
    return this.baseUrl + '/' + appendUrl(url, argsOrParam, params);
  }

  get namespace() {
    return this._namespace;
  }

  set namespace(namespace) {
    this._namespace = namespace;
  }

  get controller() {
    return this._controller;
  }

  set controller(controller) {
    this._controller = controller;
  }

  get action() {
    return this._action;
  }

  set action(action) {
    this._action = action;
  }

  get id() {
    return this._id;
  }

  set id(id) {
    this._id = id;
  }

  get baseUrl() {
    return this._baseUrl;
  }

  set baseUrl(baseUrl) {
    this._baseUrl = baseUrl;
  }
}

const app = new App();

export default app;
