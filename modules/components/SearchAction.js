import React from 'react';
import {Col, FormGroup} from 'react-bootstrap';

function SearchAction(props) {
  return (
    <FormGroup>
      <Col md={11} mdOffset={1} className="m-b-0">
        {props.children}
      </Col>
    </FormGroup>
  );
}

export default SearchAction;
