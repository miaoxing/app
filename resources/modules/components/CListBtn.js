import React from 'react';
import ListBtn from 'components/ListBtn';
import app from 'app';

const CListBtn = (...props) => {
  return <ListBtn href={app.curIndexUrl()} {...props} />;
};

export default CListBtn;
