import message from 'comps/react-bootstrap-message/js/react-bootstrap-message';

class App {
  constructor() {
    this._namesapce = '';
    this._controller = '';
    this._action = '';
    this._id = '';
    this._history = null;
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

  actionUrl(action, argsOrParam, params) {
    return $.appendUrl(this.curIndexUrl() + '/' + action, argsOrParam, params);
  }

  to(...args) {
    this.history.push(this.url(...args))
  }

  reload() {
    this.history.replace(this.history.location);
  }

  get(url) {
    return $.ajax({
      url: url,
      loading: true,
      dataType: 'json',
    }).then(ret => {
      if (ret.code !== 1) {
        return $.msg(ret);
      }
      return ret;
    });
  }

  post(url, data = {}) {
    return $.ajax({
      url: url,
      loading: true,
      dataType: 'json',
      type: 'post',
      data: data,
    })
  }

  suc(...args) {
    return message.success(...args);
  }

  err(...args) {
    return message.danger(...args);
  }

  ret(ret, duration, callback) {
    return message[ret.code === 1 ? 'success' : 'danger'](ret.message, duration, callback);
  }

  loading(...args) {
    return message.loading(...args);
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

  get history() {
    return this._history;
  }

  set history(history) {
    this._history = history;
  }
}

const app = new App();

export default app;
export const url = app.url;
