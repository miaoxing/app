import React from 'react';
import {PageLoading} from '@miaoxing/loading';
import * as Sentry from '@sentry/browser';
import {Button} from 'antd';
import {InternalServerError} from "@miaoxing/ret";

export default (props) => {
  if (props.error) {
    Sentry.captureException(props.error);
    return <InternalServerError
      extra={<Button type="primary" onClick={props.retry}>重试</Button>}
    />
  }

  return <PageLoading/>;
};
