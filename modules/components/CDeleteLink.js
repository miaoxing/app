import React from 'react';
import DeleteLink from 'components/DeleteLink';
import app2 from 'app2';

const CDeleteLink = ({id, ...props}) => <DeleteLink href={app2.curDestroyUrl(id)} {...props} />;

export default CDeleteLink;
