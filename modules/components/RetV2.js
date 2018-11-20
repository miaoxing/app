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
  }

  return <Ret>
    <img className="m-b" width="120" src={types[ret.retType || 'error']}/>
    <Ret.Title className="m-b-lg">{ret.message}</Ret.Title>
  </Ret>
};

export default RetV2;
