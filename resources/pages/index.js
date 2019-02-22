import '@babel/polyfill';
import React from 'react';
import ReactDOM from 'react-dom';
import AppContainer from './AppContainer';

import '../modules/requirejs-custom/require';
import 'script-loader!jquery/dist/jquery.min';

import 'bootstrap/js/dist/modal';
import '../modules/bootstrap-mobile/js/loading';
import '../modules/bootstrap-mobile/js/modal';
import 'vendor/miaoxing/app/public/libs/jquery-list/jquery-list';
import 'vendor/miaoxing/app/public/js/app';
import 'vendor/miaoxing/app/public/js/require-config';
import 'vendor/miaoxing/app/public/js/tips';
import 'vendor/miaoxing/app/public/js/bootstrap-popup';
import 'vendor/miaoxing/app/public/js/bootstrap-ajax-tips';

import 'vendor/miaoxing/app/resources/scss/index.scss';

$.tips.defaults.baseClass = 'badge';
ReactDOM.render(<AppContainer/>, document.getElementById('root'));
