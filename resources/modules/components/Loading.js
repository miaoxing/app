import React from 'react';
import {Spinner} from "react-bootstrap";

// NOTE: antd spin 会传入 className=ant-spin-dot，以便居中显示
export default (props) => <Spinner animation="grow" variant="primary" {...props}/>
