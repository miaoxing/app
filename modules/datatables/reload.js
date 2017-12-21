/**
 * 重新加载当前页面
 *
 * 1. URL不会更新
 * 2. 保留在当前页面
 */
$.fn.dataTableExt.oApi.reload = function (setting, callback) {
  this.DataTable().ajax.reload(callback, false);
};
