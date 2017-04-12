define(['form', 'validator', 'assets/spectrum'], function () {
  var AppSettings = function () {
    // do nothings.
  };

  AppSettings.prototype.indexAction = function () {
    $('.js-brand-primary').spectrum();

    $('.js-setting-form')
      .ajaxForm({
        dataType: 'json',
        beforeSubmit: function (arr, $form) {
          return $form.valid();
        }
      })
      .validate();
  };

  return new AppSettings();
});
