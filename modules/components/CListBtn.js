import React from 'react';
import ListBtn from 'components/ListBtn';
import app2 from 'app2';

const CListBtn = (...props) => {
  return <ListBtn href={app2.curIndexUrl()} {...props} />;
};

export default CListBtn;
