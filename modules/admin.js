import React from 'react'
import ReactDOM from 'react-dom'
import { AppContainer } from 'react-hot-loader'

const map = {
  'admin/question-experts': () => import(/* webpackChunkName:'question-experts' */ 'vendor/miaoxing/question/modules/containers/admin/question-experts/index.jsx'),
  'admin/question-experts/new': () => import(/* webpackChunkName:'question-experts-form' */ 'vendor/miaoxing/question/modules/containers/admin/question-experts/form.jsx'),
  'admin/groups': () => import(/* webpackChunkName:'groups' */ 'vendor/miaoxing/user/modules/containers/admin/groups/index.jsx'),
  'admin/groups/new': () => import(/* webpackChunkName:'groups-form' */ 'vendor/miaoxing/user/modules/containers/admin/groups/form.jsx'),
}

const load = () => {
  var name = location.pathname.substr($.baseUrl.length + 1);
  if (!map[name]) {
    throw 'not found';
  }

  map[name]().then((Root) => {
    render(Root.default)
  })
}

const render = Component => {
  ReactDOM.render(
    <AppContainer>
      <Component/>
    </AppContainer>,
    document.getElementById('root')
  )
}

load()
if (module.hot) {
  module.hot.accept(() => {
    load()
  })
}
