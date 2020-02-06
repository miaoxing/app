import React from 'react';
import app from 'app';
import {EditLink} from "@miaoxing/button";

const CEditLink = ({id, ...props}) => <EditLink href={app.curEditUrl(id)} {...props} />;

export default CEditLink;
