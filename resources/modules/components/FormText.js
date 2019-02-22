import React from 'react';
import {Col, FormLabel, FormControl, FormGroup} from 'react-bootstrap';

const FormText = ({label, children}) => {
  return <FormGroup>
    <Col as={FormLabel} sm={2}>
      {label}
    </Col>
    <Col sm={10}>
      <FormControl.Static>{children || '-'}</FormControl.Static>
    </Col>
  </FormGroup>;
};

export default FormText;
