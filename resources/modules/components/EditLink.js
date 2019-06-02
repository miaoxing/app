import React from 'react';
import Link from 'components/Link';

export default ({href, children, ...props}) => (
  <Link to={href} {...props}>{children || '编辑'}</Link>
);
