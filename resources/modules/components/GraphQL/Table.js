import React from 'react';
import BootstrapTable from 'components/BootstrapTable';
import gql from "graphql-tag";
import Query from "components/Query";
import ucfirst from "ucfirst";
import pluralize from "pluralize";
import app from 'app';
import paginationFactory from "react-bootstrap-table2-paginator";
import axios from "axios";
import {withTable} from "components/TableProvider";

@withTable
export default class Table extends React.Component {
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

  refetch = () => {
  };

  buildQuery() {
    if (this.props.query) {
      return this.props.query;
    }

    let fields = [];
    this.props.columns.forEach((column, i) => {
      if (column.dataField && /[_A-Za-z][_0-9A-Za-z]*/.test(column.dataField)) {
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
    // 自身参数
    const state = {
      page: this.state.page,
      sizePerPage: this.state.sizePerPage,
      sortField: this.state.sortField,
      sortOrder: this.state.sortOrder,
      search: this.state.search,
    };

    const newState = Object.assign({}, state, {search: this.props.table.search}, params);

    if (JSON.stringify(state) === JSON.stringify(newState)) {
      this.refetch();
    } else {
      this.setState(newState);
    }
  }

  handleLoad = (type, {page, sizePerPage, sortField, sortOrder}) => {
    this.reload({
      page: type === 'sort' ? 1 : page,
      sizePerPage: sizePerPage,
      sortField: sortField,
      sortOrder: sortOrder,
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
          // @paginate
          page: this.state.page,
          count: this.state.sizePerPage,

          sort: this.state.sortField || '',
          order: this.state.sortOrder || '',
          search: JSON.stringify(this.state.search),
        }
      }}
    >
      {({loading, error, data, refetch}) => {
        // 存储该变量以便后续主动调用重载
        this.refetch = refetch;

        const result = Object.values(data)[0];

        return <BootstrapTable
          {...this.props}
          data={result ? result.data : []}
          paginatorInfo={result ? result.paginatorInfo : {}}
          loading={loading}
          onLoad={this.handleLoad}
        />
      }}
    </Query>
  }
}
