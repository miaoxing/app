export default Promise.all([
  import(/* webpackChunkName:"select2" */ 'comps/select2/select2.min'),
  import(/* webpackChunkName:"select2" */ 'comps/select2/select2_locale_zh-CN'),
  import(/* webpackChunkName:"select2" */ 'comps/select2/select2.css'),
  import(/* webpackChunkName:"select2" */ 'comps/select2-bootstrap-css/select2-bootstrap.css')
])
