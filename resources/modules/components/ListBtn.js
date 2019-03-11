import React from 'react';
import BtnLink from 'components/BtnLink';

export default ({href, children, ...props}) => (
  <BtnLink to={href} variant="secondary" {...props}>
    {children || '返回列表'}
  </BtnLink>
);
