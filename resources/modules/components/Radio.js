import React from 'react';
import Field from "components/Field";
import {connect} from "formik";

function Radio(props) {
  return <Field type="radio" checked={props.formik.values[props.name] == props.value} {...props}/>;
}

export default connect(Radio);
