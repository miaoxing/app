define(['plugins/app/libs/bootbox/bootbox'], function (bootbox) {
  bootbox.addLocale('zh_CN', {
    OK: 'OK',
    CANCEL: '取消',
    CONFIRM: '确定'
  });
  bootbox.setDefaults({
    locale: 'zh_CN'
  });
  return bootbox;
});
