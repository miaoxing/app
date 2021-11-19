import $, {Ret} from 'miaoxing';

import modal from '@mxjs/modal';
import '@mxjs/modal/style/index.scss';

import {message} from 'antd';
import message2 from 'react-bootstrap-message/js/react-bootstrap-message';
import 'react-bootstrap-message/scss/react-bootstrap-message.scss';

import axios from '@mxjs/axios';

import {req, url} from '@mxjs/app';

$.loading = message2.loading;
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
