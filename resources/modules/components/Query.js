import React from "react";
import {Query as GraphQLQuery} from "react-apollo";
import Error from "vendor/miaoxing/graphql/resources/components/Error";

export default ({loading: showLoading, ...props}) => {
  return <GraphQLQuery {...props}>
    {({loading, error, ...rest}) => {
      if (showLoading && loading) {
        return <div className="text-center mt-3">努力加载中...</div>;
      }

      if (error) {
        return <Error error={error}/>
      }

      return props.children({loading, error, ...rest});
    }}
  </GraphQLQuery>
};
