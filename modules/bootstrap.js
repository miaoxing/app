import $, {Ret} from 'miaoxing';

import modal from '@mxjs/modal';
import '@mxjs/modal/style/index.scss';

import {message} from 'antd';

import axios from '@mxjs/axios';

import {req, url} from '@mxjs/app';
import {isValidElement} from 'react';

const loadingOptions = {
  content: '加载中...',
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

$.alert = (message, fn) => modal.alert(message).then(fn);
$.confirm = (message, fn) => modal(message).then(fn);

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
