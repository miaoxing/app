import React from 'react';

export default (props) => {
  if (props.error) {
    if (props.error.code === 'MODULE_NOT_FOUND'
      && document.getElementById('root').parentElement.children.length > 1) {
      // 忽略页面输出内容的情况
      return '';
    }

    return <div className="m-t">很抱歉,加载出错! <button className="btn btn-default btn-sm" onClick={props.retry}>重试</button>
      <div className="hide">{props.error.toString()}</div>
    </div>;
  } else {
    return <div className="text-center m-t">努力加载中...</div>;
  }
};
