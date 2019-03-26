import React from "react";
import {Form} from 'react-bootstrap';

export default ({id, ...props}) => {
  if (!id) {
    id = props.name + '-' + props.value;
  }

  return (<Form.Check custom id={id} {...props}/>);
}
