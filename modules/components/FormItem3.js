import React from "react";
import {ControlLabel, FormControl, FormGroup} from "react-bootstrap";
import {Field} from "formik";
import Required from "components/Required.jsx";

const FormItem3 = ({id, label, ...props}) => {
  return <FormGroup controlId={id}>
    <ControlLabel>
      {label}
      {props.required && <React.Fragment>{' '}<Required/></React.Fragment>}
    </ControlLabel>
    <div className="col-control">
      <FormControl componentClass={Field} {...props} />
    </div>
  </FormGroup>
};
export default FormItem3;
