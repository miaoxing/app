import React from 'react';
import {PageLoading} from '@miaoxing/loading';
import * as Sentry from '@sentry/browser';

export default (props) => {
  if (props.error) {
    Sentry.captureException(props.error);
    return <div className="mt-3">
      很抱歉,加载出错! <button className="btn btn-secondary btn-sm" onClick={props.retry}>重试</button>
      <div className="d-none">{props.error.toString()}</div>
    </div>;
  } else {
    return <PageLoading/>;
  }
};
