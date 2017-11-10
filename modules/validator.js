export default Promise.all([
  import(/* webpackChunkName:"jquery-validate" */ 'comps/jquery-validation/jquery.validate'),
  import(/* webpackChunkName:"jquery-validate" */ 'comps/jquery-validation/localization/messages_zh')
]).then(() => {
  import(/* webpackChunkName:"jquery-validation-bootstrap-tooltip" */ 'plugins/app/libs/jquery-validation-bootstrap-tooltip/jquery-validate.bootstrap-tooltip.min')
});
