import { createRoot } from 'react-dom/client';
import AppContainer from '../components/AppContainer';

import './bootstrap';
import '../scss/index.scss';

import { wei } from '@mxjs/app';
import config from 'config';

wei.setConfigs(config);

const container = document.getElementById('root');
const root = createRoot(container);
root.render(<AppContainer/>);
