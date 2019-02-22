import 'datatables.net';
import 'datatables.net-bs4/js/dataTables.bootstrap4.min';

import './datatables/deletable';
import './datatables/search';
import './datatables/reload';
import './datatables/external-search';

// 初始化默认配置
$.extend(true, $.fn.dataTable.defaults, {
  dom: 'tr<\'row\'<\'col-sm-4\'i><\'col-sm-8\'pl>>',
  processing: true,
  serverSide: true,
  autoWidth: false,
  pagingType: 'full_numbers',
  // eslint-disable-next-line no-magic-numbers
  lengthMenu: [10, 25, 50, 100, 500, 1000],
  columnDefs: [
    {
      targets: ['_all'],
      sortable: false,
      orderSequence: ['desc', 'asc', ''],
      defaultContent: '-',
      render: function (data) {
        return data === '' ? '-' : data;
      }
    }
  ],
  order: [[0, 'desc']], // 默认第一栏改为倒序
  ajax: {
    data: function (data) {
      // 转换为后台需要的参数
      data.rows = data.length;
      data.page = data.start / data.length + 1;

      // 如果有排序，先改为老的一维排序
      if (data.order.length) {
        data.sort = data.columns[data.order[0].column].data;
        data.order = data.order[0].dir;
      }

      delete data.draw;
      delete data.start;
      delete data.length;
      delete data.columns;
      delete data.search;
    },
    beforeSend: function (jqXHR, settings) {
      var origSuccess = settings.success;
      settings.success = function (json) {
        // 允许后台返回错误提示,如权限不足
        if (json.code < 1) {
          $.msg(json);
          return;
        }

        if (undefined === json.recordsTotal) {
          json.recordsTotal = json.records;
        }
        if (undefined === json.recordsFiltered) {
          json.recordsFiltered = json.records;
        }
        origSuccess.apply(this, arguments);
      };
    }
  },
  language: {
    url: '',
    emptyTable: '暂无记录',
    sProcessing: '加载中...',
    sLengthMenu: '每页 _MENU_ 项结果',
    sZeroRecords: '暂无记录',
    sInfo: '显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项',
    sInfoEmpty: '显示第 0 至 0 项结果，共 0 项',
    sInfoFiltered: '(由 _MAX_ 项结果过滤)',
    sInfoPostFix: '',
    sInfoThousands: ' ',
    sSearch: '搜索:',
    paginate: {
      first: '<i class="fa fa-angle-double-left"></i>',
      previous: '<i class="fa fa-angle-left">',
      next: '<i class="fa fa-angle-right"></i>',
      last: '<i class="fa fa-angle-double-right"></i>'
    },
    oAria: {
      sSortAscending: ': 以升序排列此列',
      sSortDescending: ': 以降序排列此列'
    }
  }
});