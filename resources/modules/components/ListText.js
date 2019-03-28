import React from 'react';

const ListText = ({label, children, ...props}) => {
  return <li className="list-item list-description" {...props}>
    <h4 className="list-title">
      {label}
    </h4>
    <div className="list-detail">{children || '-'}</div>
  </li>;
};

export default ListText;
