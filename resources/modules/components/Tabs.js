import React from "react";
import {Tabs as RbTabs} from 'react-bootstrap';
import classNames from 'classnames';

export default ({className, ...props}) => {
  return <RbTabs className={classNames(className, 'nav-underline header-nav')} {...props}/>
}
