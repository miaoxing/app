import React from 'react';
import {withRouter} from "react-router-dom";
import ListBtn from "components/ListBtn";

const CListBtn = ({id, ...props}) => {
  const namespace = props.match.params.namespace ? (props.match.params.namespace + '/') : '';
  const url = $.baseUrl + '/' + namespace + props.match.params.controller;

  return <ListBtn href={url} {...props} />;
};

export default withRouter(CListBtn);
