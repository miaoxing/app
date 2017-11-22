/**
 * 为dataTable增加点击链接删除记录功能
 *
 * @param setting
 * @param linkSelector
 * @param message
 */
$.fn.dataTableExt.oApi.deletable = function (setting, linkSelector, message) {
  var $table = this;
  linkSelector = linkSelector || '.js-delete-record';
  message = message || '删除后将无法还原,确认删除?';
  $table.on('click', linkSelector, function () {
    var $link = $(this);
    $.confirm(message, function () {
      $.post($link.data('href'), function (ret) {
        $.msg(ret);
        $table.reload();
      }, 'json');
    });
  });
};
