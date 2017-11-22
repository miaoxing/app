/**
 * 传入字符串参数搜索DataTable
 *
 * 1. URL会更新
 * 2. 会跳转到第一页
 *
 * @param setting
 * @param params
 */
$.fn.dataTableExt.oApi.search = function (setting, params) {
  // 记录原始的URL,每次搜索使用原始URL,避免参数不断叠加
  if (typeof setting.ajax.origUrl == 'undefined') {
    setting.ajax.origUrl = setting.ajax.url;
  }

  // 允许直接传入jQuery对象
  if (params instanceof jQuery) {
    params = params.serializeArray();
  }

  var table = this.DataTable();
  var url = $.appendUrl(setting.ajax.origUrl, params);
  table.ajax.url(url).load();
};
