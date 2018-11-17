import React from 'react';

export default function PageHeader({children}) {
  return <div className="page-header">
    <h1>{children}</h1>
  </div>
}
