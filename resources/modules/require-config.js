window.requirejs.config({
  baseUrl: '/',
  waitSeconds: 30,
  paths: {
    css: 'plugins/app/libs/require-css/css.min',
    form: 'plugins/admin/js/form',

    // 保留兼容已有的缓存
    template: 'plugins/app/libs/artTemplate/template.min',
    'jquery-form': 'plugins/app/libs/jquery-form/jquery.form',
  }
});
