import React from 'react';
import {NewBtn} from '@miaoxing/button';
import app from 'plugins/app/resources/modules/app';

export default (props) => (
  <NewBtn href={app.curNewUrl()} {...props}/>
);
