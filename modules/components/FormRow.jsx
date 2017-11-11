import React from 'react';
import {FormGroup, FormControl, ControlLabel, HelpBlock, Col} from 'react-bootstrap';
import decamelize from 'decamelize';
import trim from 'trim-character';

import Required from './Required.jsx';

function FormRow({ label, name, help, controlSize, ...props }) {
  // 移除 name[] 后面的 []
  const id = trim(decamelize(name.replace(/\[\]/g, '-'), '-'), '-');

  var type = '';
  React.Children.forEach(props.children, function (child) {
    type || (type = child.type);
  });
  if (type == 'option') {
    props.componentClass = 'select';
  }

  if (!props.type && props.componentClass !== 'select' && props.componentClass !== 'textarea') {
    props.type = 'text';
  }

  return (
    <FormGroup controlId={id}>
      <Col componentClass={ControlLabel} sm={2}>
        {props.required && <Required />}
        {label}
      </Col>
      <Col sm={controlSize || 4}>
        {props.control ? (props.control) : (
          <FormControl id={id} name={name} {...props}>
            {props.children}
          </FormControl>
        )}
      </Col>
      {help &&
        <Col componentClass="label" sm={6} className="help-text">
          {help}
        </Col>
      }
    </FormGroup>
  );
}

export default FormRow
