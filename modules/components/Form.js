import React from 'react';
import {Form as RbForm} from 'react-bootstrap';

class Form extends React.Component {
  render () {
    return (
      <RbForm {...this.props}>
        {this.props.children}
      </RbForm>
    );
  }
}

export default Form
