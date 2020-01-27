import React from 'react';
import {Spinner} from "react-bootstrap";

export default (props) => {
  return <div className="text-center my-5">
    <Spinner animation="grow" variant="primary"/>
    <div>努力加载中...</div>
  </div>;
};
