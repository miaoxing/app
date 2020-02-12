import app from 'app';

typeof window.$ === 'undefined' && (window.$ = {});

$.req = app.req;
$.appendUrl = app.appendUrl;
$.url = app.url;

/**
 * 记录日志到后台
 */
$.log = function (message, params, level) {
  typeof message !== 'string' && (message = JSON.stringify(message));
  app.post(app.url('logs.json'), {
    message: message,
    params: params || {},
    level: level || 'error',
  });
};
