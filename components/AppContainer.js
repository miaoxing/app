import App from './App';
import configs from 'storage/configs/app';
import theme from '@mxjs/style/theme-preset';

const AppContainer = () => {
  return (<App configs={{theme, ...configs}}/>);
};

export default AppContainer;
