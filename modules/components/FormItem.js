import React from 'react';
import {Col, ControlLabel, FormControl, FormGroup} from 'react-bootstrap';
import Options from './Options';
import decamelize from 'decamelize';
import trim from 'trim-character';

import Required from './Required';

function FormItem({ label, name, help, labelSize, controlSize, groupSize, helpSize, ...props }) {
  // 移除 name[] 后面的 []
  const id = trim(decamelize(name.replace(/\[\]/g, '-'), '-'), '-');

  // 自动识别select类型
  if (!props.componentClass) {
    const firstChild = React.Children.toArray(props.children)[0];
    if (firstChild && (firstChild.type === 'option' || firstChild.type === <Options />.type)) {
      props.componentClass = 'select';
    }
  }

  if (!props.type && props.componentClass !== 'select' && props.componentClass !== 'textarea') {
    props.type = 'text';
  }

  var groupProps = {};
  if (groupSize) {
    groupProps = {bsSize: groupSize};
  }

  return (
    <FormGroup controlId={id} {...groupProps}>
      <Col componentClass={ControlLabel} sm={labelSize || 2}>
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
        <Col componentClass="label" sm={helpSize || 6} className="help-text">
          {help}
        </Col>
      }
    </FormGroup>
  );
}

export default FormItem