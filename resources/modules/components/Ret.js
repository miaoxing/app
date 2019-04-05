import React from "react";
import styled from "styled-components";
import {Flex, Heading, Text, Image as BaseImage} from 'rebass';

const types = {
  error: 'https://gw.alipayobjects.com/zos/rmsportal/GIyMDJnuqmcqPLpHCSkj.svg',
  wait: 'https://gw.alipayobjects.com/zos/rmsportal/HWuSTipkjJRfTWekgTUG.svg',
};

const Image = ({src, ...props}) => {
  return <BaseImage mb={3} width="120" src={src} {...props}/>
};

const Message = (props) => {
  return <Heading fontSize={4} mb={3} fontWeight="normal" {...props}/>
};

const Detail = (props) => {
  return <Text color="muted" mb={3} {...props}/>
};

const BaseContainer = ({image, src, message, detail, children, ...props}) => {
  return <Flex alignItems="center" justifyContent="center" flexDirection="column" p={4} {...props}>
    {image ? image : (src && <Image src={src}/>)}
    {message && <Message>{message}</Message>}
    {detail && <Detail>{detail}</Detail>}
    {children}
  </Flex>
};

const Container = styled(BaseContainer)`
  height: 100vh;
  text-align: center;
`;

const Ret = ({ret, children}) => {
  if (!ret || !ret.code) {
    return '';
  }

  if (ret.code === 1) {
    return children;
  }

  if (ret.next) {
    window.location = ret.next;
    return '';
  }

  return <Container
    src={types[ret.retType || 'error']}
    message={ret.message}
    detail={ret.detail}
  />
};

Ret.Container = Container;
Ret.Image = Image;
Ret.Message = Message;
Ret.Detail = Detail;

export default Ret;
