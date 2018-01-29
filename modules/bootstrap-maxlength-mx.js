import 'bootstrap-maxlength/src/bootstrap-maxlength';

// 替代原来的方法
const origMaxlength = $.fn.maxlength;
$.fn.maxlength = function (options) {
  if (options) {
    options = $.extend({}, $.fn.maxlength.defaults, options);
  } else {
    options = $.fn.maxlength.defaults;
  }

  origMaxlength.call(this, options);
};

// 增加全局默认值功能
$.fn.maxlength.defaults = {
  warningClass: 'text-muted',
  limitReachedClass: 'text-danger',
  showOnReady: true,
  alwaysShow: true,
  placement: (currentInput, maxLengthIndicator, pos) => {
    // 获取并记录默认的 padding-right
    let paddingRight = currentInput.data('padding-right');
    if (paddingRight === undefined) {
      paddingRight = parseInt(currentInput.css('padding-right'), 10);
      currentInput.data('padding-right', paddingRight);
    }

    // 在 centered-right 的基础上计算出正确的 padding-right
    const inputOuter = currentInput.outerWidth();
    const outerWidth = maxLengthIndicator.outerWidth();
    const actualHeight = maxLengthIndicator.height();

    pos.top -= currentInput.parent().offset().top;
    pos.left -= currentInput.parent().offset().left;

    maxLengthIndicator.css({
      top: pos.top + (actualHeight / 2),
      left: pos.left + inputOuter - outerWidth - paddingRight
    });

    // 让输入框的文字和提示标志不重叠
    currentInput.css('padding-right', paddingRight + maxLengthIndicator.width());
  },
  appendToParent: true,
  customMaxAttribute: 'data-rule-maxlength'
};
