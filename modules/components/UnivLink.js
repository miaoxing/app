import React from 'react';

const UnivLink = ({to, that, ...props}) => {
  return <a href="javascript:" onClick={() => that.props.history.push(to)} {...props}>{props.children}</a>;
};

export default UnivLink;
