import {hot} from 'react-hot-loader/root';
import React from 'react';
import App from "./App";
import configs from 'data/configs/app';
import theme from '@miaoxing/style/theme';

const AppContainer = () => {
  return (<App theme={theme} {...configs}/>);
};

export default hot(AppContainer);
