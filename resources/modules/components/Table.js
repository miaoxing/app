import 'react-bootstrap-table-next/dist/react-bootstrap-table2.min.css';
import 'react-bootstrap-table2-paginator/dist/react-bootstrap-table2-paginator.min.css';

import React from 'react';
import BootstrapTable from 'react-bootstrap-table-next';
import paginationFactory from 'react-bootstrap-table2-paginator';
import overlayFactory from 'react-bootstrap-table2-overlay';
import {withTable} from "components/TableProvider";
import axios from 'axios';
import app from 'app';
import * as ReactDOM from "react-dom";

const Empty = () => <span className="text-muted">-</span>;

@withTable
class Table extends React.Component {
  static defaultProps = {
    url: null,
    onLoad: null,
  };

  node = null;
  noDataIndication = '暂无数据';
  state = {
    data: [],
    page: 1,
    totalSize: 0,
    sizePerPage: 10,
    sortField: '',
    sortOrder: '',
    loading: false,
    noDataIndication: this.noDataIndication,
  };

  columns = [];

  scrollLeft = 0;

  constructor(props) {
    super(props);

    // 将Provider中的方法指向当前组件
    this.props.table.reload = this.reload.bind(this);
  }

  componentDidMount() {
    window.tableNode = this.node;
    this.reload();
  }

  componentDidUpdate(prevProps) {
    if (this.props.url !== prevProps.url
      || this.props.table.search !== prevProps.table.search
    ) {
      this.reload({page: 1});
    }

    this.restoreScrollPosition();
  }

  defaultFormatter(value) {
    if (typeof value === 'undefined' || value === '' || value === null) {
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
    this.saveScrollPosition();

    // 自身参数
    let tableParams = {
      page: this.state.page,
      rows: this.state.sizePerPage,
      sort: this.state.sortField,
      order: this.state.sortOrder,
    };

    // 外部搜索参数
    const searchParams = this.props.table.search;

    params = Object.assign({}, tableParams, searchParams, params);

    this.enableLoading();
    axios({
      url: app.appendUrl(this.getUrl(), params),
      dataType: 'json'
    }).then(({data}) => {
      this.setState({
        data: data.data,
        page: parseInt(params.page, 10),
        totalSize: data.records,
        sizePerPage: parseInt(data.rows, 10)
      });
      this.props.onLoad && this.props.onLoad(this.state);
      this.disableLoading();
    });
  }

  getUrl() {
    if (this.props.url) {
      return this.props.url;
    }

    return location.pathname + '.json' + location.search;
  }

  handleTableChange = (type, {page, sizePerPage, sortField, sortOrder}) => {
    this.setState({
      sortField,
      sortOrder
    }, () => {
      this.reload({
        page: type === 'sort' ? 1 : page,
        rows: sizePerPage,
        sort: sortField,
        order: sortOrder
      });
    });
  };

  getTableNode() {
    return ReactDOM.findDOMNode(this.node).getElementsByClassName('table-responsive')[0];
  }

  saveScrollPosition() {
    if (!this.props.fixed) {
      return;
    }

    const node = this.getTableNode();

    // 表格的内容变化，宽度可能跟着改变，所以滚动超过一半时，以终点为基准，
    // 记录 scrollLeft 为负数，表示距离终点的距离
    const middle = (node.scrollWidth - node.clientWidth) / 2;
    if (node.scrollLeft > middle) {
      this.scrollLeft = middle - node.scrollLeft;
    } else {
      this.scrollLeft = node.scrollLeft;
    }
  }

  restoreScrollPosition() {
    if (!this.scrollLeft) {
      return;
    }

    const node = this.getTableNode();
    if (this.scrollLeft > 0) {
      node.scrollLeft = this.scrollLeft;
    } else {
      node.scrollLeft = node.clientWidth + this.scrollLeft;
    }
  }

  render() {
    const {columns, ...restProps} = this.props;
    const {page, sizePerPage, totalSize} = this.state;

    columns.forEach((column) => {
      if (typeof column.dataField === 'undefined') {
        column.dataField = column.text;
      }
      if (typeof column.formatter === 'undefined') {
        column.formatter = this.defaultFormatter;
      }
    });

    return <>
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
        bootstrap4
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
    </>;
  }
}

Table.Empty = Empty;

export default Table;
