import React from 'react';
import {ControlLabel, FormControl, FormGroup} from 'react-bootstrap';
import {Field} from 'formik';
import Required from 'components/Required';
import decamelize from 'decamelize';

const MFormItem = ({name, label, ...props}) => {
  const id = name ? decamelize(name, '-') : null;

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
export default MFormItem;
