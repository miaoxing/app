/**
 * @summary     通过外部搜索表格
 * @description 指定的表单提交或控件值更改时，传递参数给dataTable并刷新
 *
 * @example
 *    $('#myTable').DataTable({
 *        searchEl: 'search-form',
 *        searchEvent: 'submit'
 *    });
 */

$(document).on('init.dt', (event, settings) => {
  if (event.namespace !== 'dt') {
    return;
  }

  // eslint-disable-next-line babel/new-cap
  var api = $.fn.dataTable.Api(settings);
  var options = api.init();
  if (!options.searchEl) {
    return;
  }

  // 根据标签自动识别出事件
  var $searchEl = $(options.searchEl);
  if (!options.searchEvent) {
    if ($searchEl[0].nodeName === 'FORM') {
      options.searchEvent = 'submit';
    } else {
      options.searchEvent = 'change';
    }
  }

  api.on('preXhr.dt', function (e, settings, data) {
    var params = $(options.searchEl).serializeArray();
    $.each(params, function (i, param) {
      data[param.name] = param.value;
    });
  });

  $searchEl.on(options.searchEvent, (e) => {
    // 避免提交表单页面刷新
    e.preventDefault();
    api.ajax.reload();
  });
});
