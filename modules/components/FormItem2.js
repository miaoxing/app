import React from 'react';
import FormItem from './FormItem';
import {Field} from 'formik';
import Options from 'components/Options';

function FormItem2({...props}) {
  // 自动识别select类型
  if (!props.component) {
    const firstChild = React.Children.toArray(props.children)[0];
    if (firstChild && (firstChild.type === 'option' || firstChild.type === <Options/>.type)) {
      props.component = 'select';
    }
  }

  if (!props.componentClass) {
    props.componentClass = Field;
  }

  return <FormItem {...props}/>;
}

export default FormItem2;
