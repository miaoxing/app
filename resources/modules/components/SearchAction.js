import React from 'react';
import {Col} from 'react-bootstrap';
import classNames from 'classnames';

function SearchAction({className, ...props}) {
  return (
    <Col sm={{span: 11, offset: 1}} className={classNames("mb-0", className)} {...props}>
      {props.children}
    </Col>
  );
}

export default SearchAction;
