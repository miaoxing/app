import React from 'react';
import ReactDOM from 'react-dom';
import {AppContainer} from 'react-hot-loader';

// 允许外部根据环境配置目录，而不是webpack.config.js中写死
if (wei.webpackPublicPath) {
  // eslint-disable-next-line camelcase,no-undef
  __webpack_public_path__ = wei.webpackPublicPath;
}

const load = () => {
  import(/* webpackChunkName:'react-containers' */'data/react-containers').then(containers => {
    if (!containers.default[wei.reactContainer]) {
      throw new Error('React container "' + wei.reactContainer + '" not found');
    }

    containers.default[wei.reactContainer]().then((Root) => {
      render(Root.default);
    });
  });
};

const render = Component => {
  ReactDOM.render(
    <AppContainer>
      <Component/>
    </AppContainer>,
    document.getElementById('root')
  );
};

load();
if (module.hot) {
  module.hot.accept(() => {
    load();
  });
}
