import React from "react";
import {Mutation} from "react-apollo";
import gql from "graphql-tag";
import app from 'app';
import pluralize from 'pluralize';
import ucfirst from 'ucfirst';

class GDeleteLink extends React.Component {
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

  getRefetchQueries() {
    return this.props.refetchQueries || [app.controller];
  }

  handleClick(mutate) {
    app.confirm(this.props.message, (result) => {
      if (!result) {
        return;
      }

      mutate({variables: {id: this.props.id}});
    });
  }

  render() {
    return <Mutation
      mutation={this.getMutation()}
      refetchQueries={this.getRefetchQueries()}
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

GDeleteLink.defaultProps = {
  message: '删除后将无法还原,确定删除?',
};

export default GDeleteLink;
