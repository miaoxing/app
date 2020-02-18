import React from 'react';
import {ListBtn} from '@miaoxing/button';
import app from 'plugins/app/resources/modules/app';

const CListBtn = (props) => {
  return <ListBtn href={app.curIndexUrl()} {...props} />;
};

export default CListBtn;
