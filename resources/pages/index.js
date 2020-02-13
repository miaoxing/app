import "core-js/stable";
import "regenerator-runtime/runtime";

import React from 'react';
import ReactDOM from 'react-dom';
import AppContainer from './AppContainer';

import 'bootstrap-mobile/js/modal';

import '../modules/bootstrap-tips';
import '../modules/bootstrap-popup';
import '../modules/loading';

import '../scss/index.scss';

ReactDOM.render(<AppContainer/>, document.getElementById('root'));
