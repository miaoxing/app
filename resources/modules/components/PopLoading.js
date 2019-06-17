import React from 'react';
import app from 'app';

export default class PopLoading extends React.Component {
  constructor(props) {
    super(props);
    app.loading('show');
  }

  componentWillUnmount() {
    app.loading('hide');
  }

  render() {
    return '';
  }
}

