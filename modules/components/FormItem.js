import React from 'react';
import {Col, ControlLabel, FormGroup} from 'react-bootstrap';
import decamelize from 'decamelize';
import Required from './Required';
import FormControl from "components/FormControl";

function FormItem({label, name, help, labelSize, controlSize, helpSize, groupSize, ...props}) {
  const id = name ? decamelize(name, '-') : null;

  return (
    <FormGroup controlId={id} bsSize={groupSize}>
      <Col componentClass={ControlLabel} sm={labelSize || 2}>
        {props.required && <Required/>}
        {label}
      </Col>
      <Col sm={controlSize || 4}>
        {props.control || <FormControl id={id} name={name} {...props}>
          {props.children}
        </FormControl>}
      </Col>
      {help && <Col componentClass="label" sm={helpSize || 6} className="help-text">
        {help}
      </Col>}
    </FormGroup>
  );
}

export default FormItem;
