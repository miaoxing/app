import React from 'react';
import EditLink from "components/EditLink";
import {withRouter} from "react-router-dom";

const CEditLink = ({id, ...props}) => <EditLink href={props.match.params.controller + '/' + id + '/edit'} {...props} />;

export default withRouter(CEditLink);
