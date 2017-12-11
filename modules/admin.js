import React from 'react'
import ReactDOM from 'react-dom'
import { AppContainer } from 'react-hot-loader'
import modules from 'data/modules';

const load = () => {
  if (!modules[wei.reactContainer]) {
    throw 'React container "' + wei.reactContainer + '" not found';
  }

  modules[wei.reactContainer]().then((Root) => {
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
