import $ from 'jquery';

(function (root, $) {
  /**
   * 获取URL中的参数
   *
   * @link http://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
   */
  $.req = function (name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) {
      return null;
    }
    if (!results[2]) {
      return '';
    }
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  };

  /**
   * 附加参数到指定地址上
   */
  $.appendUrl = function (url, argsOrParam, params) {
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
    if (!$.isEmptyObject(params)) {
      url += (url.indexOf('?') === -1 ? '?' : '&');
    }
    switch (typeof params) {
      case 'string' :
        return url + params;
      case 'undefined' :
        return url;
      default:
        return url + $.param(params);
    }
  };

  /**
   * 以appUrl为基础生成URL地址
   */
  $.url = function (url, argsOrParam, params) {
    return wei.appUrl + '/' + $.appendUrl(url, argsOrParam, params);
  };

  /**
   * 记录日志到后台
   */
  $.log = function (message, params, level) {
    typeof message !== 'string' && (message = JSON.stringify(message));
    $.post($.url('logs.json'), {
      message: message,
      params: params || {},
      level: level || 'error',
    });
  };
}(window, $));