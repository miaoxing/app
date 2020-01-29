import "core-js/stable";
import "regenerator-runtime/runtime";

import React from 'react';
import ReactDOM from 'react-dom';
import AppContainer from './AppContainer';

import 'script-loader!jquery';

import 'bootstrap/js/dist/modal';
import '../modules/bootstrap-mobile/js/modal';

import '../modules/bootstrap-tips';
import '../modules/bootstrap-popup';
import '../modules/loading';

import '../modules/wei';

import '../scss/index.scss';

ReactDOM.render(<AppContainer/>, document.getElementById('root'));
