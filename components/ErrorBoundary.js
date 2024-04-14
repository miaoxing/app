import React from 'react';
import { Button } from 'antd';
import { InternalServerError } from '@mxjs/a-ret';
import { wei } from '@mxjs/app';
import * as Sentry from '@sentry/browser';
import PropTypes from 'prop-types';
import { useLocation } from 'react-router-dom';

function withLocation(Component) {
  function ComponentWithRouterProp(props) {
    const location = useLocation();
    return (
      <Component
        {...props}
        location={location}
      />
    );
  }

  return ComponentWithRouterProp;
}

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

export default withLocation(ErrorBoundary);
