import param from 'jquery-param';

class App {
  constructor() {
    this._namesapce = '';
    this._controller = '';
    this._action = '';
    this._id = '';
    this._history = null;
    this._baseUrl = '';
  }

  url(url = '', argsOrParam, params) {
    return this.baseUrl + '/' + this.appendUrl(url, argsOrParam, params);
  }

  appendUrl(url, argsOrParam, params) {
    if (url.indexOf('%s') !== -1) {
      // @link http://stackoverflow.com/questions/610406/javascript-equivalent-to-printf-string-format
      var i = 0;
      typeof argsOrParam !== 'object' && (argsOrParam = [argsOrParam]);
      url = url.replace(/%((%)|s)/g, function (m) {
        return m[2] || argsOrParam[i++];
      });
    } else {
      params = argsOrParam;
    }
    if (params && Object.keys(params).length !== 0) {
      url += (url.indexOf('?') === -1 ? '?' : '&');
    }
    switch (typeof params) {
      case 'string' :
        return url + params;
      case 'undefined' :
        return url;
      default:
        return url + param(params);
    }
  }

  curUrl() {
    return window.location.pathname;
  }

  curApiUrl() {
    return this.namespace ?
      window.location.pathname.replace('/' + this.namespace + '/', '/' + this.namespace + '-api/')
      : ('/api' + window.location.pathname)
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

  curApiIndexUrl() {
    return this.url((this.namespace ? (this.namespace + '-') : '') + 'api/' + this.controller);
  }

  curApiFormUrl() {
    return this.curApiIndexUrl() + '/' + (this.id ? 'update' : 'create');
  }

  actionUrl(action, argsOrParam, params) {
    return this.appendUrl(this.curIndexUrl() + '/' + action, argsOrParam, params);
  }

  to(...args) {
    this.history.push(...args)
  }

  reload() {
    if (!this.history.location.state) {
      this.history.location.state = {};
    }
    this.history.location.state.__reload = new Date();
    this.history.replace(this.history.location);
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

  get history() {
    return this._history;
  }

  set history(history) {
    this._history = history;
  }
}

const app = new App();

export default app;
