import $ from 'jquery';
import modal from 'modal';

$.alert = (message, fn) => modal.alert(message).then(fn);
$.confirm = (message, fn) => modal(message).then(fn);
