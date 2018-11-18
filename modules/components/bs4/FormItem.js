import React from 'react';
import {Col, Form, Row} from 'react-bootstrap4';
import decamelize from 'decamelize';
import FormControl from "components/FormControl";
import Required from "components/Required";

function FormItem({label, name, help, labelSize = 2, controlSize = 4, helpSize = 6, groupSize, ...props}) {
  const id = name ? decamelize(name, '-') : null;

  return (
    <Form.Group as={Row} controlId={id}>
      <Form.Label column sm={labelSize}
        className={'text-sm-right ' + (groupSize ? ' col-form-label-' + groupSize : '')}>
        {props.required && <Required/>}
        {label}
      </Form.Label>
      <Col sm={controlSize}>
        {props.control || <FormControl id={id} name={name} className={(groupSize && ' form-control-' + groupSize)}
          {...props}>
          {props.children}
        </FormControl>}
      </Col>
      {help && <Col componentClass="label" sm={helpSize} className="help-text">
        {help}
      </Col>}
    </Form.Group>
  );
}

export default FormItem;
