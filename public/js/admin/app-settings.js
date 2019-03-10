define(['plugins/admin/js/form', 'plugins/app/js/validation', 'plugins/admin/js/spectrum'], function () {
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
        },
        success: function (ret) {
          $.msg(ret);
        }
      })
      .validate();
  };

  return new AppSettings();
});
