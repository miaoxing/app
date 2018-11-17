import React from 'react';
import {Col, Form, Row} from 'react-bootstrap4';
import decamelize from 'decamelize';
import FormControl from "components/FormControl";
import Required from "components/Required";

function FormItem({label, name, help, labelSize, controlSize, helpSize, groupSize, ...props}) {
  const id = name ? decamelize(name, '-') : null;

  return (
    <Form.Group as={Row} controlId={id} bsSize={groupSize}>
      <Form.Label column sm={labelSize || 2} className="text-right">
        {props.required && <Required/>}
        {label}
      </Form.Label>
      <Col sm={controlSize || 4}>
        {props.control || <FormControl id={id} name={name} {...props}>
          {props.children}
        </FormControl>}
      </Col>
      {help && <Col componentClass="label" sm={helpSize || 6} className="help-text">
        {help}
      </Col>}
    </Form.Group>
  );
}

export default FormItem;
