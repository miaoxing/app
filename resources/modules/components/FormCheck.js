import React from "react";
import {Form} from 'react-bootstrap';
import {Field} from 'formik';

export default ({id, ...props}) => {
  if (!id) {
    id = props.name + '-' + props.value;
  }

  return (
    <Field
      name={props.name}
      render={({field, form, ...more}) => (
        <>
          {console.log(field, form, more)}
          <Form.Check custom id={id} checked={form.values[props.name] == props.value} {...field} {...props}/>
        </>
      )}
    />
  );
}
