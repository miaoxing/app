import React from 'react';
import NewBtn from 'components/NewBtn';
import app2 from 'app2';

const CNewBtn = ({...props}) => <NewBtn href={app2.curNewUrl()} {...props} />;

export default CNewBtn;
