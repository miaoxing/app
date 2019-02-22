import React from 'react';
import {connect, Field as FormikField, getIn, setIn} from 'formik';

function Field(props) {
  // NOTE: 提交时,touch === undefined
  if (typeof getIn(props.formik.values, props.name) === 'undefined') {
    props.formik.values = setIn(props.formik.values, props.name, '');
  }
  return <FormikField {...props}/>
}

export default connect(Field);
