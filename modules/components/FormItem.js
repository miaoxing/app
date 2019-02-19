import React from 'react';
import {Col, Form, Row} from 'react-bootstrap';
import decamelize from 'decamelize';
import FormControl from "components/FormControl";
import Required from "components/Required";

function FormItem({component = Form.Group, label, name, help, labelSize = 2, controlSize = 4, helpSize = 6, groupSize, ...props}) {
  const id = name ? decamelize(name, '-') : null;
  const Component = component; // 大写字母开头才会识别为组件

  return (
    <Component as={Row} controlId={id}>
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
      {help && <Col as="label" sm={helpSize} className="help-text">
        {help}
      </Col>}
    </Component>
  );
}

export default FormItem;
