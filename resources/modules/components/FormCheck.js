import React from "react";
import {Form} from 'react-bootstrap';
import {Field, getIn} from 'formik';

export default ({id, ...props}) => {
  if (!id) {
    id = props.name + '-' + props.value;
  }

  return (
    <Field
      name={props.name}
      render={({field, form}) => {
        // Checked状态要自行维护
        // @link https://github.com/jaredpalmer/formik/pull/1115
        const checked = props.value == getIn(form.values, props.name);
        return <Form.Check custom checked={checked} id={id} {...field} {...props}/>
      }}
    />
  );
}
