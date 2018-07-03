import React from 'react'
import ReactDOM from 'react-dom'
import {AppContainer} from 'react-hot-loader'
import Root from './containers';

const render = Component => {
  ReactDOM.render(
    <AppContainer>
      <Component/>
    </AppContainer>,
    document.getElementById('root')
  )
};

render(Root);

if (module.hot) {
  module.hot.accept('./containers.js', () => {
    const Root = require('./containers').default;
    render(Root)
  })
}
