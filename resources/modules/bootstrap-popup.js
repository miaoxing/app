import modal from '@miaoxing/modal';

typeof window.$ === 'undefined' && (window.$ = {});

$.alert = (message, fn) => modal.alert(message).then(fn);
$.confirm = (message, fn) => modal(message).then(fn);
