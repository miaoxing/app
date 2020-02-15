import $ from '@miaoxing/app';
import modal from '@miaoxing/modal';
import message from 'react-bootstrap-message/js/react-bootstrap-message';
import axios from '@miaoxing/axios';

$.loading = message.loading;
$.alert = (message, fn) => modal.alert(message).then(fn);
$.confirm = (message, fn) => modal(message).then(fn);

$.ret = message.ret;
$.suc = message.success;
$.err = message.danger;

$.get = axios.get;
$.post = axios.post;
