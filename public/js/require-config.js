window.requirejs.config({
  baseUrl: $.baseUrl || '/',
  waitSeconds: 120,
  paths: {
    css: 'comps/require-css/css.min',
    'jquery-form': 'comps/jquery-form/jquery.form'
  }
});
