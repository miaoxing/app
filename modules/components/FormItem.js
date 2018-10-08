import React from 'react';
import {Col, ControlLabel, FormControl, FormGroup} from 'react-bootstrap';
import Options from './Options';
import decamelize from 'decamelize';
import Required from './Required';
import {connect, Field} from "formik";

function isSelect(props) {
  const firstChild = React.Children.toArray(props.children)[0];
  return firstChild && (firstChild.type === 'option' || firstChild.type === <Options/>.type);
}

function handleFormik(props) {
  // 自动识别select类型
  if (!props.component && isSelect(props)) {
    props.component = 'select';
  }

  if (!props.componentClass) {
    props.componentClass = Field;
  }

  return porps;
}

function handleDefault(props) {
  // 自动识别select类型
  if (!props.componentClass && isSelect(props)) {
    props.componentClass = 'select';
  }

  if (!props.type && props.componentClass !== 'select' && props.componentClass !== 'textarea') {
    props.type = 'text';
  }

  return props;
}

function FormItem({label, name, help, labelSize, controlSize, groupSize, helpSize, formik, ...props}) {
  const id = name ? decamelize(name, '-') : null;

  props = formik.setFieldValue ? handleFormik(props) : handleDefault(props);

  return (
    <FormGroup controlId={id} bsSize={groupSize}>
      <Col componentClass={ControlLabel} sm={labelSize || 2}>
        {props.required && <Required/>}
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

export default connect(FormItem);
