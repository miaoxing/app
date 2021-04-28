import React from 'react';
import {Button} from 'antd';
import {InternalServerError} from '@mxjs/ret';
import {wei} from '@mxjs/app';
import * as Sentry from '@sentry/browser';
import {withRouter} from 'react-router';
import PropTypes from 'prop-types';

export default @withRouter
class ErrorBoundary extends React.Component {
  static propTypes = {
    location: PropTypes.object,
    children: PropTypes.node,
  };

  state = {
    error: null,
  };

  static getDerivedStateFromError(error) {
    return {error};
  }

  componentDidCatch(error) {
    // eslint-disable-next-line no-console
    wei.getDebug() && console.error(error);
    Sentry.captureException(error);
  }

  componentDidUpdate(prevProps) {
    // Remove error when URL changed
    if (this.props.location !== prevProps.location) {
      this.setState({error: null});
    }
  }

  retry = e => {
    e.preventDefault();
    this.setState({error: null});
  };

  render() {
    if (this.state.error) {
      return (
        <InternalServerError
          extra={<Button type="primary" onClick={this.retry}>重试</Button>}
        />
      );
    }
    return this.props.children;
  }
}
