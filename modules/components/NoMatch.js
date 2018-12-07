import React from 'react';

export default () => {
  if (document.getElementById('root').parentElement.children.length > 1) {
    // 忽略页面输出内容的情况
    return '';
  }

  return <div className="text-center">很抱歉,您访问的页面不存在,请检查后再试.</div>;
}
