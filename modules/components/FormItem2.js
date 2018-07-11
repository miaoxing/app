import React from 'react';
import FormItem from './FormItem.jsx';
import {Field} from "formik";

function FormItem2(props) {
  return <FormItem componentClass={Field} {...props}/>
}

export default FormItem2;
