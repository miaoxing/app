import React from "react";
import styled from 'styled-components';

const Ret = styled.div`
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
`;

const RetTitle = styled.h2`
  font-size: 20px;
`;

const RetMessage = styled.p`
  font-size: 16px;
`;

Ret.Title = RetTitle;
Ret.Message = RetMessage;

export default Ret;
