import React from "react";
import {Mutation} from "react-apollo";

export default class extends React.Component {
  handleClick(mutate) {
    mutate({variables: {id: this.props.id}})
  }

  render() {
    const {mutation, refetchQueries} = this.props;
    return <Mutation
      mutation={mutation}
      refetchQueries={refetchQueries}
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
