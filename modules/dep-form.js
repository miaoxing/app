// 原表单模块，待废弃

define([], function () {
  // require jquery-deparam
  $.fn.loadParams = function () {
    return this.loadJSON($.deparam(location.search.substring(1)));
  };

  // require jquery-deparam
  $.queryUrl = function (url, args) {
    var params = $.deparam(location.search.substring(1));
    return $.url(url, typeof args != 'undefined' ? args : params, args);
  };

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

  var Form = function() {};
  $.extend(Form.prototype, {
    findInJson: function(elem, json) {
      for (var i in json) {
        if (elem == json[i]) {
          return true;
        }
      }
      return false;
    },
    getPrefixWithLevel:function (elem) {
      if (typeof(elem['level']) == "undefined" || elem['level'] == 0) {
        return '';
      } else {
        var str = '|';
        for (var i = 0; i < elem['level']; i++) {
          str += '--';
        }
        return str;
      }
    },
    toOptions: function ($el, options, value, key, selected) {
      var html = '';
      for (var i in options) {
        if (typeof(selected) == "undefined" || !this.findInJson(options[i][value], selected)) {
          html += '<option value="' + options[i][value] + '" ' + '>' + this.getPrefixWithLevel(options[i]) + options[i][key] + '</option>';
        } else {
          html += '<option value="' + options[i][value] + '" ' + ' selected>' + this.getPrefixWithLevel(options[i]) + options[i][key] + '</option>';
        }
      }

      $el.append(html);
    }
  });
  return new Form;
});
