import {hot} from 'react-hot-loader/root';
import React from 'react';
import App from "components/App";
import configs from 'data/configs/app';

const AppContainer = () => {
  return (<App {...configs}/>);
};

export default hot(AppContainer);
