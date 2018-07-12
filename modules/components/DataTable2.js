import 'react-bootstrap-table-next/dist/react-bootstrap-table2.min.css';
import 'react-bootstrap-table2-paginator/dist/react-bootstrap-table2-paginator.min.css';

import React from 'react';
import BootstrapTable from 'react-bootstrap-table-next';
import paginationFactory from "react-bootstrap-table2-paginator";
import overlayFactory from 'react-bootstrap-table2-overlay';
import {Link} from "react-router-dom";

const DataTable2 = ({loading, data, page, sizePerPage, onTableChange, totalSize}) => (
  <BootstrapTable
    remote={{pagination: true}}
    keyField="id"
    data={data}
    columns={[{
      dataField: 'name',
      text: '名称'
    }, {
      dataField: 'updateTime',
      text: '修改时间',
      sort: true
    }, {
      dataField: 'operate',
      text: '操作',
      formatter: (cell, row) => {
        return (<React.Fragment>
          <Link to={$.url('admin/pas-departments/%s/edit', row.id)}>
            编辑
          </Link>
          {' '}
          <a className="js-delete-record text-danger" href="javascript:"
            data-href={$.url('admin/pas-departments/%s/destroy', row.id)}>
            删除
          </a>
        </React.Fragment>);
      }
    }]}
    hover
    classes="table-center"
    noDataIndication='暂无记录'
    loading={loading}
    overlay={overlayFactory({spinner: true, background: 'rgba(192,192,192,0.3)'})}
    pagination={paginationFactory({
      page,
      sizePerPage,
      totalSize,
      showTotal: true,
      paginationTotalRenderer: (from, to, size) => (
        <span className="react-bootstrap-table-pagination-total">
            &nbsp;显示第 {from} 至 {to} 项结果，共 {size} 项
          </span>
      )
    })}
    onTableChange={onTableChange}
  />
);

export default DataTable2;
