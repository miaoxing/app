// 点击弹出ueditor的图片选择器
$.fn.imageInput = function () {
  var editor = $.getUeditor();
  var $this = $(this);
  $this.next().click(function () {
    var dialog = editor.getDialog("insertimage");
    var callback = function (type, imgObjs) {
      var src;
      if (imgObjs.src) {
        src = imgObjs.src;
      } else {
        src = imgObjs[0].src
      }
      $this.val(src);
      editor.removeListener("beforeInsertImage", callback);
      return false;
    };
    dialog.open();
    editor.addListener("beforeInsertImage", callback)
  })
};
