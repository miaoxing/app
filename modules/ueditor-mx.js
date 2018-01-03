import 'vendor/miaoxing/ueditor/modules/ueditor-config';
import 'comps/ueditor/ueditor.all.min';
import 'comps/ueditor/lang/zh-cn/zh-cn';

// 渲染富文本编辑器
window.ueditors = [];

$.fn.ueditor = function () {
  var id = $(this).attr('id');
  /* global UE */
  var editor = new UE.ui.Editor();
  editor.render(id);

  // 记录到全局供其他方法使用
  window.ueditors.push(editor);

  return this;
};

// 从全局获取或重新渲染一个编辑器
$.getUeditor = function () {
  if (!window.ueditors.length) {
    $('<textarea id="ueditor-image-picker" class="hide"></textarea>').appendTo('body').ueditor();
  }
  return window.ueditors[0];
};
