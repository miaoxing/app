import React from 'react';
import ReactDOM from 'react-dom';
import AppContainer from '../components/AppContainer';

import './bootstrap';
import '../scss/index.scss';

const root = document.getElementById('root');
if (root) {
  ReactDOM.render(<AppContainer/>, root);
}
