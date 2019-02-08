import '@babel/polyfill';
import React from 'react';
import ReactDOM from 'react-dom';
import AppContainer from './AppContainer';

import 'comps/requirejs/require';
import 'script-loader!comps/jquery/jquery.min';

import 'comps/jquery-list/jquery-list';
import 'bootstrap/js/dist/modal';
import 'comps/bootstrap-mobile/js/form';
import 'comps/bootstrap-mobile/js/loading';
import 'comps/bootstrap-mobile/js/modal';
import 'comps/bootstrap-mobile/js/spinner';
import 'vendor/miaoxing/app/public/js/app';
import 'vendor/miaoxing/app/public/js/require-config';
import 'vendor/miaoxing/app/public/js/tips';
import 'vendor/miaoxing/app/public/js/bootstrap-popup';
import 'vendor/miaoxing/app/public/js/bootstrap-ajax-tips';

import 'vendor/miaoxing/app/resources/scss/bs3.scss';
import 'vendor/miaoxing/app/resources/scss/bs4.scss';
import 'vendor/miaoxing/app/public/css/tips.css';
import 'vendor/miaoxing/app/public/css/app.css';

$.tips.defaults.baseClass = 'badge';
ReactDOM.render(<AppContainer/>, document.getElementById('root'));
