import React from 'react';
import {FormGroup, ControlLabel, FormControl, Row, Col} from 'react-bootstrap';
import decamelize from 'decamelize';

function FormFilter({label, name, ...props}) {
  const id = decamelize(name, '-');
  if (!props.type && props.componentClass !== 'select') {
    props.type = 'text';
  }

  return (
    <FormGroup bsSize="sm" controlId={id}>
      <Col md={1} componentClass={ControlLabel}>{label}：</Col>
      <Col md={3}>
        <FormControl name={name} {...props}>
          {props.children}
        </FormControl>
      </Col>
    </FormGroup>
  )
}

export default FormFilter;
