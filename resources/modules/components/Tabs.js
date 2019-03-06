import {Tabs as RbTabs} from 'react-bootstrap';
import styled from "styled-components";
import React from "react";

class Tabs extends React.Component {
  render() {
    return <RbTabs {...this.props} className={this.props.className + ' nav-underline'}/>
  }
}

export default Tabs;
