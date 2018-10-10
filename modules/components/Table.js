import 'react-bootstrap-table-next/dist/react-bootstrap-table2.min.css';
import 'react-bootstrap-table2-paginator/dist/react-bootstrap-table2-paginator.min.css';

import React from 'react';
import BootstrapTable from 'react-bootstrap-table-next';
import paginationFactory from 'react-bootstrap-table2-paginator';
import overlayFactory from 'react-bootstrap-table2-overlay';

class Table extends React.Component {
  static defaultProps = {
    url: null,
    search: {},
  };

  node = null;

  constructor(props) {
    super(props);

    this.state = {
      data: [],
      page: 1,
      totalSize: 0,
      sizePerPage: 10,
      sortField: '',
      sortOrder: '',
      loading: false,
      noDataIndication: '暂无数据',
    };
    this.prevNoDataIndication = '';

    this.handleReload = this.handleReload.bind(this);
    this.handleFilter = this.handleFilter.bind(this);
    this.handleTableChange = this.handleTableChange.bind(this);
  }

  componentDidMount() {
    this.load();

    // TODO 应该按React的通讯方式
    $(document).on('tableReload', this.handleReload);
  }

  componentDidUpdate(prevProps) {
    if (this.props.url !== prevProps.url
      || this.props.search !== prevProps.search) {
      this.load();
    }
  }

  componentWillUnmount() {
    $(document).off('tableReload', this.handleReload);
  }

  handleReload() {
    this.load();
  }

  enableLoading() {
    this.prevNoDataIndication = this.state.noDataIndication;
    this.setState({
      loading: true,
      noDataIndication: ' '
    });
  }

  disableLoading() {
    this.setState({
      loading: false,
      noDataIndication: this.prevNoDataIndication
    });
  }

  load(params = {}) {
    // 自身参数
    let tableParams = {
      page: this.state.page,
      rows: this.state.sizePerPage,
      sort: this.state.sortField,
      order: this.state.sortOrder
    };

    let searchParams = this.props.search;
    // NOTE: 兼容旧的方法
    if ($.isEmptyObject(searchParams)) {
      $($('.search-form').serializeArray()).each((index, obj) => {
        searchParams[obj.name] = obj.value;
      });
    }

    // 外部的参数
    params = Object.assign({}, tableParams, searchParams, params);

    this.enableLoading();
    $.ajax({
      url: $.appendUrl(this.props.url, params),
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

  handleFilter() {
    this.handleTableChange('filter', {
      page: 1,
      sizePerPage: this.state.sizePerPage,
      sortField: this.state.sortField,
      sortOrder: this.state.sortOrder
    });
  }

  handleTableChange(type, {page, sizePerPage, sortField, sortOrder}) {
    this.setState({
      sortField,
      sortOrder
    }, () => {
      this.load({
        page: type === 'sort' ? 1 : page,
        rows: sizePerPage,
        sort: sortField,
        order: sortOrder
      });
    });
  }

  render() {
    const {columns, filterRenderer, ...restProps} = this.props;
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
      {filterRenderer && filterRenderer(this.handleFilter)}
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

export default Table;
