require.config({
  paths: {
    'jquery-validation': 'plugins/app/libs/jquery-validation/jquery.validate',
    'jquery-validation-zh': 'plugins/app/libs/jquery-validation/localization/messages_zh',
  },
  shim: {
    'jquery-validation-zh': {
      deps: ['jquery-validation']
    },
  }
});

define(['jquery-validation', 'jquery-validation-zh'], function () {
  // https://stackoverflow.com/questions/52159649/jquery-validation-plugin-and-bootstrap-4
  jQuery.validator.setDefaults({
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
