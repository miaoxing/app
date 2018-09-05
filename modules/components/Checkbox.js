import React from "react";
import {Field} from "formik";

/**
 * @link https://codesandbox.io/s/328038x19q
 */
function Checkbox(props) {
  return <Field name={props.name}>
    {({field, form}) => {
      return <input
        type="checkbox"
        {...props}
        checked={field.value.includes(props.value)}
        onChange={() => {
          if (field.value.includes(props.value)) {
            const nextValue = field.value.filter(
              value => value !== props.value
            );
            form.setFieldValue(props.name, nextValue);
          } else {
            const nextValue = field.value.concat(props.value);
            form.setFieldValue(props.name, nextValue);
          }
        }}
      />
    }}
  </Field>;
}

export default Checkbox;
