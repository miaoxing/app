import React from 'react';
import {withRouter} from "react-router-dom";
import NewBtn from "components/NewBtn";

const CNewBtn = ({id, ...props}) => <NewBtn href={props.match.params.controller + '/new'} {...props} />;

export default withRouter(CNewBtn);
