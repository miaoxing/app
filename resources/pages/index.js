import "core-js/stable";
import "regenerator-runtime/runtime";

import React from 'react';
import ReactDOM from 'react-dom';
import AppContainer from './AppContainer';

import 'plugins/app/resources/modules/bootstrap';
import 'bootstrap-mobile/js/modal';

import '../scss/index.scss';

ReactDOM.render(<AppContainer/>, document.getElementById('root'));
