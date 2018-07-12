import 'react-bootstrap-table-next/dist/react-bootstrap-table2.min.css';
import 'react-bootstrap-table2-paginator/dist/react-bootstrap-table2-paginator.min.css';

import React from 'react';
import BootstrapTable from 'react-bootstrap-table-next';
import paginationFactory from "react-bootstrap-table2-paginator";
import overlayFactory from 'react-bootstrap-table2-overlay';

const DataTable2 = ({columns, loading, data, page, sizePerPage, onTableChange, totalSize}) => (
  <React.Fragment>
    <style>
      {`
        .react-bs-table-sizePerPage-dropdown.show {
          display:inline-block!important;
        }
       `}
    </style>
    <BootstrapTable
      remote={{pagination: true}}
      keyField="id"
      data={data}
      columns={columns}
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
  </React.Fragment>
);

export default DataTable2;
