import React from 'react';
import {hot} from 'react-hot-loader';
import App from "components/App";
import configs from 'data/configs/app';

const AppContainer = () => {
  return (<App {...configs}/>);
};

export default hot(module)(AppContainer);

