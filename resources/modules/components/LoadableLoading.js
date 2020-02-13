import React from 'react';
import {PageLoading} from '@miaoxing/loading';
import * as Sentry from '@sentry/browser';
import {Result, Button} from 'antd';

export default (props) => {
  if (props.error) {
    Sentry.captureException(props.error);
    return <Result
      status="500"
      title="出错了"
      subTitle="很抱歉，加载出错！"
      extra={<Button type="primary" onClick={props.retry}>重试</Button>}
    />
  }
  
  return <PageLoading/>;
};
