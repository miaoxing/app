import {createContext, useContext} from 'react';

const ConfigContext = createContext({
  page: {},
});

function useConfig() {
  return useContext(ConfigContext);
}

const ConfigProvider = ConfigContext.Provider;
const ConfigConsumer = ConfigContext.Consumer;

export {ConfigProvider, ConfigConsumer, useConfig};
