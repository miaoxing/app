import React from "react";
import {Query as GraphQLQuery} from "react-apollo";

export default (props) => {
  return <GraphQLQuery {...props}>
    {({loading, error, ...rest}) => {
      if (loading) {
        return <div className="text-center mt-3">努力加载中...</div>;
      }

      if (error) {
        return `很抱歉，加载出错：${error.message}`;
      }

      return props.children({loading, error, ...rest});
    }}
  </GraphQLQuery>
};
