import React from 'react';
import {Col, ControlLabel, FormControl, FormGroup} from 'react-bootstrap';

const TextItem = ({label, children}) => {
  return <FormGroup>
    <Col componentClass={ControlLabel} sm={2}>
      {label}
    </Col>
    <Col sm={10}>
      <FormControl.Static>{children || '-'}</FormControl.Static>
    </Col>
  </FormGroup>;
};

export default TextItem;
