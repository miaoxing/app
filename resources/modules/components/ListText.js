import React from 'react';

const ListText = ({label, children, ...props}) => {
  return <li className="list-item" {...props}>
    <h4 className="list-heading">
      <span className="text-muted">{label}</span>
      <span className="float-right">{children || '-'}</span>
    </h4>
  </li>;
};

export default ListText;
