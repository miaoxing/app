require.config({
  paths: {
    'jquery-validation': 'plugins/app/libs/jquery-validation/jquery.validate',
    'jquery-validation-zh': 'plugins/app/libs/jquery-validation/localization/messages_zh',
  },
  shim: {
    'jquery-validation-zh': {
      deps: ['jquery-validation']
    },
    'plugins/app/libs/jquery-validation-bootstrap-tooltip/jquery-validate.bootstrap-tooltip.min': {
      deps: ['jquery-validation']
    },
  }
});

define([
  'jquery-validation-zh',
  'plugins/app/libs/jquery-validation-bootstrap-tooltip/jquery-validate.bootstrap-tooltip.min'
], function () {

});
