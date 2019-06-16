import React from 'react';
import BootstrapTable from 'components/BootstrapTable';
import gql from "graphql-tag";
import Query from "components/Query";
import ucfirst from "ucfirst";
import pluralize from "pluralize";
import app from 'app';
import paginationFactory from "react-bootstrap-table2-paginator";

export default class GraphQLTable extends React.Component {
  static defaultProps = {
    extraFields: [],
    keyField: 'id',
  };

  state = {
    page: 1,
    totalSize: 0,
    sizePerPage: 10,
    sortField: '',
    sortOrder: '',
    search: [],
  };

  buildQuery() {
    if (this.props.query) {
      return this.props.query;
    }

    let fields = [];
    this.props.columns.forEach((column, i) => {
      if (column.dataField) {
        fields.push(column.dataField);
      }
    });

    fields = fields.concat(this.props.extraFields);

    if (!fields.includes(this.props.keyField)) {
      fields.unshift(this.props.keyField);
    }

    const models = app.controller;
    return gql(`
      query ${models}($query: ListInput) {
        ${models}(query: $query) {
          data {
            ${fields.join(' ')}
          }
          paginatorInfo {
            total
            currentPage
            perPage
          }
        }
      }
    `);
  }

  reload(params = {}) {
    this.setState({
      search: this.props.table.search,
    });

    this.refetch();
  }

  handleLoad = (type, {page, sizePerPage, sortField, sortOrder}) => {
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

  render() {
    return <Query
      loading={false}
      query={this.buildQuery()}
      fetchPolicy="network-only"
      notifyOnNetworkStatusChange={true}
      variables={{
        query: {
          page: this.state.page,
          limit: this.state.sizePerPage,
          sort: this.state.sortField || '',
          order: this.state.sortOrder || '',
          search: JSON.stringify(this.state.search),
        }
      }}
    >
      {({loading, error, data, refetch}) => {
        const result = Object.values(data)[0];
        const paginatorInfo = result ? result.paginatorInfo : null;
        this.refetch = refetch;

        return <BootstrapTable
          {...this.props}
          data={result ? result.data : []}
          loading={loading}
          onLoad={this.handleLoad}
          pagination={paginationFactory({
            page: paginatorInfo ? paginatorInfo.currentPage : 1,
            sizePerPage: paginatorInfo ? paginatorInfo.perPage : 10,
            totalSize: paginatorInfo ? paginatorInfo.total : 0,
            showTotal: true,
            paginationTotalRenderer: (from, to, size) => (
              <span className="react-bootstrap-table-pagination-total">
                &nbsp;显示第 {from} 至 {to} 项结果，共 {size} 项
              </span>
            )
          })}
        />
      }}
    </Query>
  }
}
