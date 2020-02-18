import React from 'react';
import app from 'plugins/app/resources/modules/app';
import {DeleteLink} from "@miaoxing/button";

const CDeleteLink = ({id, ...props}) => <DeleteLink href={app.curDestroyUrl(id)} {...props} />;

export default CDeleteLink;
