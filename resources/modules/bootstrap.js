import $ from 'miaoxing';
import modal from '@miaoxing/modal';
import message from 'react-bootstrap-message/js/react-bootstrap-message';
import 'react-bootstrap-message/scss/react-bootstrap-message.scss';
import axios from '@miaoxing/axios';

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
  args[0].method = 'POST';
  return $.get(...args);
};
