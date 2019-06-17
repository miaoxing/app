import React from 'react';
import app from 'app';

export default class PopError extends React.Component {
  constructor(props) {
    super(props);
    app.err(props.error);
  }

  render() {
    return '';
  }
}
