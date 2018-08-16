import React from 'react';

const ListText = ({label, children}) => {
  return <li className="list-item">
    <h4 className="list-heading">
      <span className="text-muted">{label}</span>
      <span className="pull-right">{children}</span>
    </h4>
  </li>;
};

export default ListText;
