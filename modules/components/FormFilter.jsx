import React from 'react';
import {ControlLabel, FormControl, Row, Col} from 'react-bootstrap';
import decamelize from 'decamelize';

function FormFilter({label, name, ...props}) {
  const id = decamelize(name, '-');
  if (!props.type && props.componentClass !== 'select') {
    props.type = 'text';
  }

  return (
    <span className="filter-item-wrapper">
      <Col md={1} componentClass={ControlLabel}  htmlFor={id}>{label}：</Col>
      <Col md={3}>
        <FormControl id={id} name={name} {...props}>
          {props.children}
        </FormControl>
      </Col>
    </span>
  )
}

export default FormFilter;
