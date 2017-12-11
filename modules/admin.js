import React from 'react'
import ReactDOM from 'react-dom'
import { AppContainer } from 'react-hot-loader'

const load = () => {
  import(/* webpackChunkName:'react-containers' */'data/react-containers').then(containers => {
    if (!containers.default[wei.reactContainer]) {
      throw 'React container "' + wei.reactContainer + '" not found';
    }

    containers.default[wei.reactContainer]().then((Root) => {
      render(Root.default)
    })
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
