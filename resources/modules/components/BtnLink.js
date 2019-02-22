import React from 'react';
import {Link} from 'react-router-dom';
import {Button} from 'react-bootstrap';

export default ({to, children, ...rest}) => {
  return <Button as={Link} href={to} to={to} {...rest}>{children}</Button>;
};
