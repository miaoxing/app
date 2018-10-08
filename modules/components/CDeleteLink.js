import React from 'react';
import DeleteLink from 'components/DeleteLink';
import app from 'app';

const CDeleteLink = ({id, ...props}) => <DeleteLink href={app.curDestroyUrl(id)} {...props} />;

export default CDeleteLink;
