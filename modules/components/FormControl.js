import React from 'react';
import {FormControl as RbFormControl} from 'react-bootstrap';
import {connect} from "formik";
import Field from "components/Field";
import Options from "components/Options";

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

  return props;
}

const FormControl = ({formik, ...props}) => {
  if (formik.setFieldValue) {
    props = handleFormik(props);
  }

  // 自动识别select类型
  if (!props.componentClass && isSelect(props)) {
    props.componentClass = 'select';
  }

  if (!props.type && props.componentClass !== 'select' && props.componentClass !== 'textarea') {
    props.type = 'text';
  }

  return (
    <RbFormControl {...props}>{props.children}</RbFormControl>
  );
};

export default connect(FormControl);
