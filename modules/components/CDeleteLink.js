import React from 'react';
import DeleteLink from "components/DeleteLink";
import {withRouter} from "react-router-dom";

const CDeleteLink = ({id, ...props}) => <DeleteLink
  href={props.match.params.controller + '/' + id + '/destroy'} {...props} />;

export default withRouter(CDeleteLink);
