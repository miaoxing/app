import React from 'react';
import FormItem from './FormItem.jsx';
import {Field} from "formik";

function FormItem2(props) {
  if (!props.componentClass) {
    props.componentClass = Field;
  }
  return <FormItem {...props}/>
}

export default FormItem2;
