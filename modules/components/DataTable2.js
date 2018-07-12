import 'react-bootstrap-table-next/dist/react-bootstrap-table2.min.css';
import 'react-bootstrap-table2-paginator/dist/react-bootstrap-table2-paginator.min.css';

import React from 'react';
import BootstrapTable from 'react-bootstrap-table-next';
import paginationFactory from "react-bootstrap-table2-paginator";
import overlayFactory from 'react-bootstrap-table2-overlay';

class DataTable2 extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      page: 1,
      data: [],
      totalSize: 0,
      sizePerPage: 10,
      loading: true
    };
    this.handleTableChange = this.handleTableChange.bind(this);
  }

  componentDidMount() {
    this.load();
  }

  load() {
    $.ajax({
      url: $.url('admin/pas-departments.json'),
      dataType: 'json',
    }).done(ret => {
      this.setState({
        //page,
        data: ret.data,
        totalSize: ret.total,
        noDataIndication: '加载中...'
        //loading: false,
        //sizePerPage
      });
    }).always(() => {
      this.setState(() => ({ loading: false }));
    })
  }

  handleTableChange(type, { page, sizePerPage, filters, sortField, sortOrder }) {
    this.setState(() => ({ loading: true }));
    const currentIndex = (page - 1) * sizePerPage;
    $.ajax({
      url: $.url('admin/pas-departments.json', {
        page: page,
        rows: sizePerPage,
        sort: sortField,
        order: sortOrder,
      }),
      dataType: 'json',
    }).done(ret => {
      this.setState(() => ({
        page,
        data: ret.data,
        totalSize: ret.total,
        loading: false,
        sizePerPage
      }));
    }).always(() => {
      this.setState(() => ({ loading: false }));
    })
  }

  render() {
    const {columns, page, sizePerPage, onTableChange, totalSize} = this.props;
    return <React.Fragment>
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
        data={this.state.data}
        columns={columns}
        hover
        classes="table-center"
        noDataIndication='暂无记录'
        loading={this.state.loading}
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
    </React.Fragment>;
  }
}

export default DataTable2;
