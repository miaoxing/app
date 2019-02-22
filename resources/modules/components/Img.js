import styled from "styled-components";
import React from "react";

class Img extends React.Component {
  render() {
    const {size, ...rest} = this.props;
    return <img {...rest}/>
  }
}

const StyledImg = styled(Img)`
  height: ${props => props.size || 0}px;
  width: ${props => props.size || 0}px;
`;

export default StyledImg;
