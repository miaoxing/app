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
import * as styled from "styled-components";
import classNames from 'classnames';

const Empty = () => <span className="text-muted">-</span>;

const GlobalStyle = styled.createGlobalStyle`
  .react-bs-table-sizePerPage-dropdown.show {
    display:inline-block !important;
  }
  
  .react-bs-table-no-data {
    height: 5rem;
  }
  
  .table-fixed-container {
    overflow-x: hidden;
    
    .react-bootstrap-table-pagination {
      margin-top: 1rem;
    }
  }
  
  .table-fixed {
    margin-bottom: 0;
    
    // 重新实现不合并的边框
    border-collapse: separate;
    border-spacing: 0;
    
    td, th {
      border-right-width: 0;
      border-bottom-width: 0;
      
      &:last-child {
        border-left: 1px solid #e0e0e0;
        border-right: 1px solid #e0e0e0;
      }
    }
    
    > thead > tr > th {
      border-bottom-width: 0;
    }
    
    tr:last-child td {
      border-bottom: 1px solid #e0e0e0;
    }
    
    .react-bootstrap-table & {
      table-layout: auto;
    }
    
    // Hover
    &.table-hover tbody tr:hover .col-fixed {
      background-color: inherit;
    }
  }
  
  .col-fixed {
    position: sticky;
    background: #fff;
    
    .table-fixed & {
      border-right: 1px solid #e0e0e0;
    }
  }
  
  th.col-fixed {
    background: inherit;
  }
  
  .col-fixed-left {
    left: 0;
    
    & + th,
    & + td {
      border-left-width: 0;
    }
  }
  
  .col-fixed-right {
    right: 0;
  }
  
  // 左边有滚动，加上左边列的右侧阴影
  .table-fixed-scroll-left .col-fixed-left-last::after {
    box-shadow: 15px 0 15px -15px inset rgba(0, 0, 0, 0.15);
    content: " ";
    height: 100%;
    position: absolute;
    top: 0;
    right: -15px;
    width: 15px;
  }
  
  // 右边有滚动，加上右边的左侧阴影
  .table-fixed-scroll-right .col-fixed-right {
    &::before {
      box-shadow: -15px 0 15px -15px inset rgba(0, 0, 0, 0.15);
      content: " ";
      height: 100%;
      left: -15px;
      position: absolute;
      top: 0;
      width: 15px;
    }
    
    // 除了第一个之外的不用加上阴影
    & ~ .col-fixed-right::before {
      display: none;
    }
  }
`;

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

  fixed = false;
  scrollLeft = 0;
  lefts = {};

  constructor(props) {
    super(props);

    // 将Provider中的方法指向当前组件
    this.props.table.reload = this.reload.bind(this);
  }

  componentDidMount() {
    window.tableNode = this.node;
    this.reload();
    this.bindScroll();
  }

  componentWillUnmount() {
    this.unbindScroll();
  }

  componentDidUpdate(prevProps) {
    if (this.props.url !== prevProps.url
      || this.props.table.search !== prevProps.table.search
    ) {
      this.reload({page: 1});
    }

    this.updateScrollClasses();
    this.restoreScrollPosition();
    this.calColPositions();
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
    this.saveScrollPosition();
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

  getMainNode() {
    return ReactDOM.findDOMNode(this.node).getElementsByClassName('react-bootstrap-table')[0];
  }

  saveScrollPosition() {
    if (!this.fixed) {
      return;
    }

    const node = this.getMainNode();
    if (node.scrollLeft && node.clientWidth + node.scrollLeft === node.scrollWidth) {
      // -1 means scrolled to end
      this.scrollLeft = -1;
    } else {
      this.scrollLeft = node.scrollLeft;
    }
  }

  bindScroll() {
    document.addEventListener('scroll', this.handleScroll, true);
  }

  unbindScroll() {
    document.removeEventListener('scroll', this.handleScroll, true);
  }

  handleScroll = (e) => {
    if (e.target !== document && e.target === this.getMainNode()) {
      this.updateScrollClasses();
    }
  };

  updateScrollClasses() {
    const node = this.getMainNode();

    let state = {};
    state.hasScrollLeft = node.scrollLeft !== 0;
    state.hasScrollRight = node.clientWidth + node.scrollLeft !== node.scrollWidth;

    // TODO 直接绑定到 wrapper,通过 setState 更新类名
    const table = node.children[0];
    table.classList[state.hasScrollLeft ? 'add' : 'remove']('table-fixed-scroll-left');
    table.classList[state.hasScrollRight ? 'add' : 'remove']('table-fixed-scroll-right');
  }

  restoreScrollPosition() {
    if (!this.scrollLeft) {
      return;
    }

    const node = this.getMainNode();
    if (this.scrollLeft === -1) {
      node.scrollLeft = node.scrollWidth - node.clientWidth;
    } else {
      node.scrollLeft = this.scrollLeft;
    }
  }

  calColPositions() {
    const node = this.getMainNode();
    const table = node.children[0];

    this.columns.forEach((column, i) => {
      if (column.fixed !== 'left') {
        return;
      }

      const cell = table.rows[0].cells[i];
      const left = cell.offsetLeft + 'px';
      for (let row of table.rows) {
        if (row.cells[i]) {
          row.cells[i].style.left = left;
        }
      }
    });

    let right = 0;
    const length = this.columns.length;
    this.columns.reverse().forEach((column, i) => {
      if (column.fixed !== 'right') {
        return;
      }

      const index = this.columns.length - i - 1;
      for (let row of table.rows) {
        if (row.cells[index]) {
          row.cells[index].style.right = right + 'px';
        }
      }
      right += table.rows[0].cells[index].offsetWidth;
    });
  }

  render() {
    const {columns, ...restProps} = this.props;
    const {page, sizePerPage, totalSize} = this.state;

    this.fixed = false;
    columns.forEach((column, i) => {
      if (typeof column.dataField === 'undefined') {
        column.dataField = column.text;
      }
      if (typeof column.formatter === 'undefined') {
        column.formatter = this.defaultFormatter;
      }
      if (typeof column.fixed !== 'undefined') {
        this.fixed = true;
        let classes = 'col-fixed col-fixed-' + column.fixed;
        if (!column.classes || !column.classes.includes(classes)) {
          if (columns[i + 1] && !columns[i + 1].fixed) {
            classes += ' col-fixed-' + column.fixed + '-last';
          }
          column.classes = classNames(column.classes, classes);
        }
        if (!column.headerClasses || !column.headerClasses.includes(classes)) {
          column.headerClasses = classNames(column.headerClasses, classes);
        }
      }
    });
    this.columns = columns;

    restProps.classes = classNames(restProps.classes, 'table-center', {
      'table-fixed': this.fixed,
      // 'table-fixed-scroll-left': this.state.hasScrollLeft,
      // 'table-fixed-scroll-right': this.state.hasScrollRight,
    });

    if (this.fixed) {
      restProps.wrapperClasses = classNames(restProps.wrapperClasses, 'table-responsive');
    }

    return <div className={this.fixed ? 'table-fixed-container' : null}>
      <GlobalStyle/>
      <BootstrapTable
        ref={n => this.node = n}
        remote={{pagination: true}}
        keyField="id"
        data={this.state.data}
        columns={columns}
        hover
        bootstrap4
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
    </div>;
  }
}

Table.Empty = Empty;

export default Table;
