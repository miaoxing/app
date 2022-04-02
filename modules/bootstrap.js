import {isValidElement} from 'react';
import $, {Ret} from 'miaoxing';
import {message, Modal} from 'antd';
import axios from '@mxjs/axios';
import {req, url} from '@mxjs/app';

const loadingOptions = {
  content: '加载中...',
  duration: 0,
};

let count = 0;
let loading;

function showLoading() {
  count++;
  if (count === 1) {
    loading = message.loading({content: loadingOptions.content});
  }
}

function hideLoading() {
  if (!loading) {
    return;
  }

  if (count > 0) {
    count--;
  }
  if (count === 0) {
    loading();
  }
}

$.loading = (options) => {
  switch (options) {
    case 'show':
      return showLoading();

    case 'hide':
      return hideLoading();

    default:
      if (typeof options === 'string' || isValidElement(options)) {
        options = {content: options};
      }
      return message.loading({...loadingOptions, ...options});
  }
};

function confirm(config, type = 'confirm') {
  if (typeof config.content === 'undefined') {
    config = {content: config};
  }

  let currentConfig = addPromise({...config, show: true});

  let ok;
  let cancel;
  let callback;
  const result = new Promise(resolve => {
    callback = resolve;
  });
  result.ok = fn => {
    ok = fn;
    return result;
  };
  result.cancel = fn => {
    cancel = fn;
    return result;
  };

  function addPromise(config) {
    const onOk = config.onOk;
    config.onOk = () => {
      callback(true);
      const result = ok && ok();
      const result2 = onOk && onOk();
      return result || result2;
    };

    const onCancel = config.onCancel;
    config.onCancel = () => {
      callback(false);
      const result = cancel && cancel();
      const result2 = onCancel && onCancel();
      return result || result2;
    };

    return config;
  }

  const confirmResult = Modal[type](currentConfig);

  result.destroy = confirmResult.destroy;
  result.update = confirmResult.update;

  return result;
}

$.alert = (message, fn) => confirm(message, 'info').then(fn);
$.confirm = (message, fn) => confirm(message).then(fn);

$.suc = message.success;
$.err = message.error;
$.ret = (ret, duration, callback) => {
  const result = $[ret.code === 0 ? 'suc' : 'err'](ret.message, duration, callback);

  let suc;
  result.suc = fn => {
    suc = fn;
    return result;
  };

  let err;
  result.err = fn => {
    err = fn;
    return result;
  };

  result.then(() => {
    if (ret.code === 0 && suc) {
      suc();
    }
    if (ret.code !== 0 && err) {
      err();
    }
  });

  return result;
};

$.http = (...args) => axios(...args).then(res => {
  res.ret = new Ret(res.data);
  return res;
});

$.req = req.get.bind(req);
$.url = url.to.bind(url);
$.apiUrl = url.api.bind(url);

window.$ = $;
