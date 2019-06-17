import React from "react";
import {Mutation} from "react-apollo";
import gql from "graphql-tag";
import app from 'app';
import pluralize from 'pluralize';
import ucfirst from 'ucfirst';
import {withTable} from "components/TableProvider";

class CDeleteLink extends React.Component {
  getMutation() {
    if (this.props.mutation) {
      return this.props.mutation;
    }

    const model = ucfirst(pluralize.singular(app.controller));
    return gql(`
      mutation delete${model}($id: ID!) {
        delete${model}(id: $id) {
          id
        }
      }
    `);
  }

  handleClick(mutate) {
    app.confirm(this.props.message).ok(() => {
      mutate({variables: {id: this.props.id}}).then(() => {
        this.props.table && this.props.table.reload();
      });
    });
  }

  render() {
    return <Mutation
      mutation={this.getMutation()}
    >
      {(mutate, {loading, error, data}) => {
        return <>
          <a className="text-danger" href="javascript:;"
            onClick={loading ? null : this.handleClick.bind(this, mutate)}>删除</a>
          {error && <a>{error.message}</a>}
        </>;
      }}
    </Mutation>
  }
}

CDeleteLink.defaultProps = {
  message: '删除后将无法还原,确定删除?',
};

export default withTable(CDeleteLink);
