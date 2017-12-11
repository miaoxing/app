import React from 'react'
import ReactDOM from 'react-dom'
import { AppContainer } from 'react-hot-loader'
import modules from 'data/modules';

const load = () => {
  const name = location.pathname.substr($.baseUrl.length + 1);
  if (!modules[name]) {
    throw 'not found';
  }

  modules[name]().then((Root) => {
    render(Root.default)
  })
};

const render = Component => {
  ReactDOM.render(
    <AppContainer>
      <Component/>
    </AppContainer>,
    document.getElementById('root')
  )
};

load();
if (module.hot) {
  module.hot.accept(() => {
    load()
  })
}
