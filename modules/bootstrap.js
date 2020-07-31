import $ from 'miaoxing';

import modal from '@mxjs/modal';
import '@mxjs/modal/style/index.scss';

import message from 'react-bootstrap-message/js/react-bootstrap-message';
import 'react-bootstrap-message/scss/react-bootstrap-message.scss';

import axios from '@mxjs/axios';

$.loading = message.loading;
$.alert = (message, fn) => modal.alert(message).then(fn);
$.confirm = (message, fn) => modal(message).then(fn);

$.ret = message.ret;
$.suc = message.success;
$.err = message.danger;

$.get = (...args) => {
  return axios(...args).then(({data}) => data);
};
$.post = (...args) => {
  let config;

  if (typeof args[0] === 'string') {
    config = args[1] || {};
    config.url = args[0];
  } else {
    config = args[0];
  }

  config.method = 'POST';

  return $.get(config);
};
