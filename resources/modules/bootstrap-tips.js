import $ from 'jquery';
import message from 'vendor/miaoxing/app/resources/modules/react-bootstrap-message/js/react-bootstrap-message';

/**
 * 根据JSON显示提示
 */
$.msg = function (result, delay, callback) {
  var method = result.code > 0 ? 'success' : 'danger';
  return message[method](result.message, delay, callback);
};

/**
 * 快捷方法
 */
['success', 'danger', 'warning', 'info'].forEach(type => {
  $[type] = message[type];
});
$.suc = message.success;
$.err = message.danger;

window.message = message;
