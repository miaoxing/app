import ReactDOM from 'react-dom';
import AppContainer from '../components/AppContainer';

import './bootstrap';
import '../scss/index.scss';

import {wei} from '@mxjs/app';
import config from 'config';

wei.setConfigs(config);

const root = document.getElementById('root');
if (root) {
  ReactDOM.render(<AppContainer/>, root);
}
