import message from 'react-bootstrap-message/js/react-bootstrap-message';

typeof window.$ === 'undefined' && (window.$ = {});

/**
 * 根据JSON显示提示
 */
$.msg = function (...args) {
  return message.ret(...args);
};

/**
 * 快捷方法
 */
['success', 'danger', 'warning', 'info'].forEach(type => {
  $[type] = message[type];
});
$.suc = message.success;
$.err = message.danger;
