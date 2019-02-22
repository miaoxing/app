import React from 'react';
import {FormLabel, FormGroup} from 'react-bootstrap';
import Required from 'components/Required';
import decamelize from 'decamelize';
import FormControl from "components/FormControl";

const MFormItem = ({name, label, ...props}) => {
  const id = name ? decamelize(name, '-') : null;

  return <FormGroup controlId={id}>
    {label && <FormLabel>
      {label}
      {props.required && <>{' '}<Required/></>}
    </FormLabel>}
    <div className="col-control">
      {props.control || <FormControl id={id} name={name} {...props}>
        {props.children}
      </FormControl>}
    </div>
  </FormGroup>;
};
export default MFormItem;