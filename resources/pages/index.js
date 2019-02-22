import '@babel/polyfill';
import React from 'react';
import ReactDOM from 'react-dom';
import AppContainer from './AppContainer';

import '../modules/requirejs-custom/require';
import 'script-loader!jquery/dist/jquery.min';

import 'bootstrap/js/dist/modal';
import '../modules/bootstrap-mobile/js/loading';
import '../modules/bootstrap-mobile/js/modal';
import '../modules/bootstrap-tips/bootstrap-tips';
import '../modules/wei';
import '../modules/require-config';
import '../modules/bootstrap-popup';
import '../modules/bootstrap-ajax-tips';

import '../scss/index.scss';

ReactDOM.render(<AppContainer/>, document.getElementById('root'));
