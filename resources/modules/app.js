import param from 'jquery-param';

class App {
  constructor() {
    this._namesapce = '';
    this._controller = '';
    this._action = '';
    this._id = '';
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
