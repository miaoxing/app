import {Tabs as RbTabs} from 'react-bootstrap';
import styled from "styled-components";
import React from "react";

class Tabs extends React.Component {
  componentDidMount() {
    // 样式美化
    // TODO 改为styled覆盖
    $('.js-tabs ul').removeClass('nav-tabs').addClass('tab-underline');
  }

  render() {
    return <RbTabs id="tabs" {...this.props} className={this.props.className + ' js-tabs'}/>
  }
}

const UnderlineTabs = styled(Tabs)`
  > .tab-content {
    border-width: 0;
  };
`;

export default UnderlineTabs;
