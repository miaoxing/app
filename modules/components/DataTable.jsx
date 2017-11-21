import React from 'react';
import {Table} from 'react-bootstrap';

import 'datatables.net';
import 'datatables.net-bs/js/dataTables.bootstrap';
//import 'datatables.net-bs/css/dataTables.bootstrap.css';

// Reload dataTables with extra parameters
$.extend(true, $.fn.dataTable.defaults, {
  dom: "tr<'row'<'col-sm-4'i><'col-sm-8'pl>>",
  processing: true,
  serverSide: true,
  autoWidth: false,
  dataSrc: 'data',
  pagingType: 'full_numbers',
  lengthMenu: [10, 25, 50, 100, 500, 1000],
  columnDefs: [
    {
      targets: ['_all'],
      sortable: false,
      orderSequence: ['desc', 'asc', '']
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

        if (undefined == json.recordsTotal) {
          json.recordsTotal = json.records;
        }
        if (undefined == json.recordsFiltered) {
          json.recordsFiltered = json.records;
        }
        origSuccess.apply(this, arguments)
      }
    }
  },
  language: {
    url: '',
    emptyTable: '暂无记录',
    sProcessing: "加载中...",
    sLengthMenu: "每页 _MENU_ 项结果",
    sZeroRecords: '暂无记录',
    sInfo: "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
    sInfoEmpty: "显示第 0 至 0 项结果，共 0 项",
    sInfoFiltered: "(由 _MAX_ 项结果过滤)",
    sInfoPostFix: "",
    sInfoThousands: ' ',
    sSearch: "搜索:",
    paginate: {
      first: '<i class="fa fa-angle-double-left"></i>',
      previous: '<i class="fa fa-angle-left">',
      next: '<i class="fa fa-angle-right"></i>',
      last: '<i class="fa fa-angle-double-right"></i>'
    },
    oAria: {
      sSortAscending: ": 以升序排列此列",
      sSortDescending: ": 以降序排列此列"
    }
  }
});

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

/**
 * 重新加载当前页面
 *
 * 1. URL不会更新
 * 2. 保留在当前页面
 */
$.fn.dataTableExt.oApi.reload = function () {
  this.DataTable().ajax.reload(null, false);
};

class DataTable extends React.Component {
  render () {
    return (
      <Table bordered hover responsive className={this.props.className + ' table-center'}>
        {this.props.children}
      </Table>
    );
  }
}

export default DataTable
