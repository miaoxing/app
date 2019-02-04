import '@babel/polyfill';
import React from 'react';
import ReactDOM from 'react-dom';
import AppContainer from './AppContainer';

import 'comps/requirejs/require';
import 'script-loader!comps/jquery/jquery.min';

import 'comps/jquery-list/jquery-list';
import 'comps/bootstrap-custom/js/bootstrap.min';
import 'comps/bootstrap-mobile/dist/js/bootstrap-mobile.min';
import 'vendor/miaoxing/app/public/js/app';
import 'vendor/miaoxing/app/public/js/require-config';
import 'vendor/miaoxing/app/public/js/tips';
import 'vendor/miaoxing/app/public/js/bootstrap-popup';
import 'vendor/miaoxing/app/public/js/bootstrap-ajax-tips';

import 'vendor/miaoxing/app/resources/scss/bs3.scss';
import 'vendor/miaoxing/app/resources/scss/bs4.scss';
import 'comps/bootstrap-mobile/scss/bootstrap-mobile.scss';
import 'vendor/miaoxing/app/public/css/tips.css';
import 'vendor/miaoxing/app/public/css/app.css';

ReactDOM.render(<AppContainer/>, document.getElementById('root'));
