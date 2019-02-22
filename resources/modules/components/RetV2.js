import React from "react";
import Ret from "components/Ret";

const types = {
  error: 'https://gw.alipayobjects.com/zos/rmsportal/GIyMDJnuqmcqPLpHCSkj.svg',
  wait: 'https://gw.alipayobjects.com/zos/rmsportal/HWuSTipkjJRfTWekgTUG.svg',
};

const RetV2 = ({ret, history, children}) => {
  if (!ret || !ret.code) {
    return '';
  }

  if (ret.code === 1) {
    return children;
  }

  if (ret.next) {
    window.location = ret.next;
    return '';
  }

  return <Ret>
    <img className="mb-3" width="120" src={types[ret.retType || 'error']}/>
    <Ret.Title className="mb-5">{ret.message}</Ret.Title>
  </Ret>
};

export default RetV2;
