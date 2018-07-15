import React from 'react';
import EditLink from 'components/EditLink';
import app2 from 'app2';

const CEditLink = ({id, ...props}) => <EditLink href={app2.curEditUrl(id)} {...props} />;

export default CEditLink;
