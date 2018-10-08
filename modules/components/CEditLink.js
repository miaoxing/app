import React from 'react';
import EditLink from 'components/EditLink';
import app from 'app';

const CEditLink = ({id, ...props}) => <EditLink href={app.curEditUrl(id)} {...props} />;

export default CEditLink;
