import React from 'react';
import {FormGroup, FormControl, ControlLabel, HelpBlock, Col} from 'react-bootstrap';
import {Options} from 'components';
import decamelize from 'decamelize';
import trim from 'trim-character';

import Required from './Required.jsx';

function FormItem({ label, name, help, controlSize, ...props }) {
  // 移除 name[] 后面的 []
  const id = trim(decamelize(name.replace(/\[\]/g, '-'), '-'), '-');

  // 自动识别select类型
  var firstChild = React.Children.toArray(props.children)[0];
  if (firstChild && (firstChild.type === 'option' || firstChild.type === Options)) {
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

export default FormItem
