import $ from 'jquery';

(function (root, $) {
  var showDuration = 350;
  var hideDuration = 100;

  $.tips = function (message, options) {
    options = $.extend({}, $.tips.defaults, options);

    // Construct
    var $overlay = $('<div class="tips-overlay tips-' + options.valign + '"><div></div></div>');
    var $tips = $overlay.find('div');
    $tips.addClass(['tips', options.baseClass, options.baseClass + '-' + options.type].join(' '));
    $tips.html(message);
    $(options.ele).append($overlay);

    // Display
    // setTimeout for append() behaves synchronously
    setTimeout(function () {
      $tips.addClass('in');
    }, 0);
    if (options.delay > 0) {
      setTimeout(hide, options.delay + showDuration);
    }
    $overlay.click(hide);

    function hide() {
      if ($tips.hasClass('in')) {
        $tips.removeClass('in').addClass('out');
        setTimeout(function () {
          $overlay.remove();
          options.callback && options.callback();
        }, hideDuration);
      }
    }

    return $tips;
  };

  $.tips.hideAll = function () {
    return $('.tips').hide();
  };

  /**
   * 快捷方法
   */
  $.each(['success', 'info', 'warning', 'danger'], function (i, type) {
    $[type] = function (message, delay, callback) {
      if ($.isFunction(delay)) {
        callback = delay;
        delay = $.tips.defaults.delay;
      }
      return $.tips(message, {
        type: type,
        delay: delay,
        callback: callback
      });
    };
  });

  /**
   * 根据JSON显示提示
   */
  $.msg = function (result, delay, callback) {
    var method = result.code > 0 ? 'success' : 'danger';
    $[method](result.message, delay, callback);
  };

  /**
   * 默认配置
   */
  $.tips.defaults = {
    ele: 'body',
    baseClass: 'badge',
    type: 'info',
    valign: 'middle',
    delay: 2000,
    callback: null
  };

  /**
   * 兼容已有的方法
   */
  $.suc = $.success;
  $.err = $.danger;
}(window, $));
