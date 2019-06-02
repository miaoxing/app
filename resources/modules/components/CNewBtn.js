import React from 'react';
import NewBtn from 'components/NewBtn';
import app from 'app';

export default (props) => (
  <NewBtn href={app.curNewUrl()} {...props}/>
);
