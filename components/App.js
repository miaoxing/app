import React, { useState } from 'react';
import { BrowserRouter, Route, Routes, useLocation } from 'react-router-dom';
import loadable from '@loadable/component';
import $ from 'miaoxing';
import { app, event, wei } from '@mxjs/app';
import { NotFound } from '@mxjs/a-ret';
import { PageLoading } from '@mxjs/a-loading';
import PropTypes from 'prop-types';
import { extendTheme, ThemeProvider } from '@chakra-ui/react';
import { ConfigProvider } from '@mxjs/config';
import useAsyncEffect from 'use-async-effect';
import ErrorBoundary from './ErrorBoundary';
import RouterStore from './RouterStore';

const importPage = async (page) => {
  return page ? page.import() : NotFound;
};

const getLayout = (page, defaultLayout) => {
  if (page && typeof page.layout !== 'undefined') {
    if (page.layout) {
      return loadable(() => page.layout, {
        fallback: <PageLoading/>,
      });
    } else {
      return React.Fragment;
    }
  } else {
    return defaultLayout;
  }
};

const loadConfig = async () => {
  const { ret } = await $.get('js-config');
  if (ret.isErr()) {
    $.ret(ret);
    return;
  }
  return ret;
};

// 缓存加载过的页面，以便 modal 页面不会重新加载
const loadedPages = {};

const App = (
  {
    configs = { theme: {} },
    defaultLayout = React.Fragment,
  }
) => {
  const [theme, setTheme] = useState(configs.theme);

  // 从后端加载的配置
  const [config, setConfig] = useState({ page: {} });

  useAsyncEffect(async () => {
    wei.setConfigs(configs);

    const ret = await loadConfig();
    wei.setConfigs(ret.data);
    setConfig(ret.data);
    setTheme(extendTheme(ret.data.theme, theme));
    document.title = ret.data.page.title;
  }, []);

  const LoadableComponent = () => {
    const location = useLocation();
    const page = app.matchLocation(location);
    if (!page) {
      return;
    }

    event.trigger('pageLoad', {location});

    const key = location.pathname.replace(/\/+$/, '') + location.search;
    if (!loadedPages[key]) {
      loadedPages[key] = loadable(() => importPage(page), {
        fallback: <PageLoading/>,
      });
    }

    const LoadableComponent = loadedPages[key];
    const PageLayout = getLayout(page, defaultLayout);
    return (
      <PageLayout>
        <ErrorBoundary>
          <LoadableComponent/>
        </ErrorBoundary>
      </PageLayout>
    );
  };

  return (
    <ConfigProvider config={config}>
      <ThemeProvider theme={theme}>
        <BrowserRouter>
          <RouterStore/>
          <Routes>
            <Route path="*" element={<LoadableComponent/>}/>
          </Routes>
        </BrowserRouter>
      </ThemeProvider>
    </ConfigProvider>
  );
};

App.propTypes = {
  configs: PropTypes.object,
  defaultLayout: PropTypes.elementType,
};

export default App;
