import 'vendor/miaoxing/ueditor/modules/ueditor-config';
import 'comps/ueditor/ueditor.all.min';
import 'comps/ueditor/lang/zh-cn/zh-cn';

$.fn.ueditor = function () {
  const id = $(this).attr('id');
  /* global UE */
  const editor = new UE.ui.Editor();
  editor.render(id);

  return this;
};
