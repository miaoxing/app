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
      data: [],
      page: 1,
      totalSize: 0,
      sizePerPage: 10,
      loading: false,
      noDataIndication: '暂无数据',
    };
    this.handleTableChange = this.handleTableChange.bind(this);
  }

  componentDidMount() {
    this.load({
      page: this.state.page,
      sizePerPage: this.state.sizePerPage
    });
  }

  load(params) {
    this.setState({
      loading: true,
      noDataIndication: '加载中...'
    });

    $.ajax({
      url: $.appendUrl(this.props.url, params),
      dataType: 'json',
    }).done(ret => {
      this.setState({
        data: ret.data,
        totalSize: ret.total,
      });
    }).always(() => {
      this.setState({
        loading: false,
        noDataIndication: '暂无数据',
      });
    })
  }

  handleTableChange(type, {page, sizePerPage, sortField, sortOrder}) {
    this.load({
      page: page,
      rows: sizePerPage,
      sort: sortField,
      order: sortOrder,
    });
  }

  render() {
    const {columns} = this.props;
    const {page, sizePerPage, totalSize} = this.state;

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
        noDataIndication={this.state.noDataIndication}
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
        onTableChange={this.handleTableChange}
      />
    </React.Fragment>;
  }
}

export default DataTable2;
