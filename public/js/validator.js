define(['jquery-validation', 'jquery-validation-zh'], function () {
  // http://stackoverflow.com/a/19006517
  $.validator.setDefaults({
    errorElement: 'span',
    errorClass: 'help-block',
    highlight: function (element) {
      $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function (element) {
      $(element).closest('.form-group').removeClass('has-error');
    },
    errorPlacement: function (error, element) {
      if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
        error.insertAfter(element.parent());
      } else {
        error.insertAfter(element);
      }
    }
  });
});
