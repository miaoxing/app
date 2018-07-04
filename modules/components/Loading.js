import React from 'react';

export default (props) => {
  if (props.error) {
    return <div>很抱歉,加载出错! <button className="btn btn-default btn-sm" onClick={ props.retry }>重试</button>
      <div className="hide">{props.error.toString()}</div>
    </div>;
  } else {
    return <div className="text-center">努力加载中...</div>;
  }
}
