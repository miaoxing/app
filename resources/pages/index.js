import "core-js/stable";
import "regenerator-runtime/runtime";

import React from 'react';
import ReactDOM from 'react-dom';
import AppContainer from '../components/AppContainer';

import '../modules/bootstrap';
import '../scss/index.scss';

ReactDOM.render(<AppContainer/>, document.getElementById('root'));
