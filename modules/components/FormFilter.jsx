import React from 'react';
import {ControlLabel, FormControl, Col} from 'react-bootstrap';
import decamelize from 'decamelize';
import 'plugins/admin/css/filter.css';

function FormFilter({label, name, ...props}) {
  const id = decamelize(name, '-');
  if (!props.type && props.componentClass !== 'select') {
    props.type = 'text';
  }

  return (
    <span>
      <ControlLabel className="col-md-1" htmlFor={id}>{label}：</ControlLabel>
      <Col md={3}>
        <FormControl id={id} name={name} {...props}>
          {props.children}
        </FormControl>
      </Col>
    </span>
  )
}

export default FormFilter;
