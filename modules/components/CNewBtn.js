import React from 'react';
import NewBtn from 'components/NewBtn';
import app from 'app';

const CNewBtn = ({...props}) => <NewBtn href={app.curNewUrl()} {...props} />;

export default CNewBtn;
