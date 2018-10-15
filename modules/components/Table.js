import 'react-bootstrap-table-next/dist/react-bootstrap-table2.min.css';
import 'react-bootstrap-table2-paginator/dist/react-bootstrap-table2-paginator.min.css';

import React from 'react';
import BootstrapTable from 'react-bootstrap-table-next';
import paginationFactory from 'react-bootstrap-table2-paginator';
import overlayFactory from 'react-bootstrap-table2-overlay';
import {withTable} from "components/TableProvider";

class Table extends React.Component {
  static defaultProps = {
    url: null
  };

  node = null;
  noDataIndication = '暂无数据';
  state = {
    data: [],
    page: 1,
    totalSize: 0,
    sizePerPage: 10,
    loading: false,
    noDataIndication: this.noDataIndication,
  };

  columns = [];

  constructor(props) {
    super(props);

    // 将Provider中的方法指向当前组件
    this.props.table.reload = this.reload.bind(this);

    this.props.columns.forEach((column) => {
      if (typeof column.dataField === 'undefined') {
        column.dataField = column.text;
      }
      if (typeof column.formatter === 'undefined') {
        column.formatter = this.defaultFormatter;
      }
    });
  }

  componentDidMount() {
    this.reload();
  }

  componentDidUpdate(prevProps) {
    if (this.props.url !== prevProps.url
      || this.props.table.search !== prevProps.table.search
    ) {
      this.reload({page: 1});
    }
  }

  defaultFormatter(value) {
    if (value === null || typeof value === 'undefined') {
      return <span className="text-muted">-</span>;
    } else {
      return value;
    }
  }

  enableLoading() {
    this.setState({
      loading: true,
      noDataIndication: ' ',
    });
  }

  disableLoading() {
    this.setState({
      loading: false,
      noDataIndication: this.noDataIndication,
    });
  }

  reload(params = {}) {
    // 自身参数
    let tableParams = {
      page: this.state.page,
      rows: this.state.sizePerPage,
      sort: this.node.sortContext ? this.node.sortContext.state.sortColumn : '',
      order: this.node.sortContext ?  this.node.sortContext.state.sortOrder : '',
    };

    // 外部搜索参数
    const searchParams = this.props.table.search;

    params = Object.assign({}, tableParams, searchParams, params);

    this.enableLoading();
    $.ajax({
      url: $.appendUrl(this.getUrl(), params),
      dataType: 'json'
    }).done(ret => {
      this.setState({
        data: ret.data,
        page: parseInt(params.page, 10),
        totalSize: ret.records,
        sizePerPage: parseInt(ret.rows, 10)
      });
    }).always(() => {
      this.disableLoading();
    });
  }

  getUrl() {
    if (this.props.url) {
      return this.props.url;
    }

    return location.pathname + '.json' + location.search;
  }

  handleTableChange = (type, {page, sizePerPage}) => {
    this.reload({
      page: type === 'sort' ? 1 : page,
      rows: sizePerPage
    });
  };

  render() {
    const {columns, ...restProps} = this.props;
    const {page, sizePerPage, totalSize} = this.state;

    return <React.Fragment>
      <style>
        {`
        .react-bs-table-sizePerPage-dropdown.show {
          display:inline-block!important;
        }
        .react-bs-table-no-data {
          height: 5rem;
        }
       `}
      </style>
      <BootstrapTable
        ref={n => this.node = n}
        remote={{pagination: true}}
        keyField="id"
        data={this.state.data}
        columns={columns}
        hover
        classes="table-center"
        noDataIndication={this.state.noDataIndication}
        loading={this.state.loading}
        overlay={overlayFactory({
          spinner: true,
          background: 'rgba(192,192,192,0.3)'
        })}
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
        {...restProps}
      />
    </React.Fragment>;
  }
}

export default withTable(Table);
