import "core-js/stable";
import "regenerator-runtime/runtime";

import React from 'react';
import ReactDOM from 'react-dom';
import AppContainer from '../components/AppContainer';

import '../modules/bootstrap';
import '../scss/index.scss';
import '@miaoxing/icons';

const root = document.getElementById('root');
if (root) {
  ReactDOM.render(<AppContainer/>, root);
}
