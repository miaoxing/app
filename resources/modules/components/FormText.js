import React from 'react';
import {Col, FormLabel, FormControl, FormGroup} from 'react-bootstrap';

const FormText = ({label, children}) => {
  return <FormGroup className="row">
    <FormLabel column sm={2} className="text-sm-right">
      {label}
    </FormLabel>
    <Col sm={10}>
      <div className="form-control-plaintext">{children || '-'}</div>
    </Col>
  </FormGroup>;
};

export default FormText;
