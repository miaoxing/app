import React from 'react';
import Field from "components/Field";
import {connect, getIn} from "formik";

function CheckboxV2(props) {
  return <Field type="checkbox" checked={getIn(props.formik.values, props.name) == props.value} {...props}/>;
}

export default connect(CheckboxV2);
