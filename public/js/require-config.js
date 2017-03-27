require.config({
  baseUrl: $.baseUrl || '/',
  urlArgs: 'v=' + ($.version || 1),
  waitSeconds: 120,
  paths: {
    'css': 'comps/require-css/css.min',
    'jquery-form': 'comps/jquery-form/jquery.form'
  }
});
