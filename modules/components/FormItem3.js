import React from 'react';
import {ControlLabel, FormControl, FormGroup} from 'react-bootstrap';
import {Field} from 'formik';
import Required from 'components/Required';
import decamelize from 'decamelize';
import trim from 'trim-character';

const FormItem3 = ({name = '', label, ...props}) => {
  // 移除 name[] 后面的 []
  const id = trim(decamelize(name.replace(/\[\]/g, '-'), '-'), '-');

  return <FormGroup controlId={id}>
    {label && <ControlLabel>
      {label}
      {props.required && <React.Fragment>{' '}<Required/></React.Fragment>}
    </ControlLabel>}
    <div className="col-control">
      <FormControl componentClass={Field} name={name} {...props} />
    </div>
  </FormGroup>;
};
export default FormItem3;
