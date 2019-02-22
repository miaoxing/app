(function ($) {
    // 对底部modal框超出屏幕高度做自适应
    var oldShow = $.fn.modal.Constructor.prototype.show;
    $.fn.modal.Constructor.prototype.show = function () {
        oldShow.call(this, arguments);
        this.updateBodyHeight($(this._element));
    };

    var oldHandleUpdate = $.fn.modal.Constructor.prototype.handleUpdate;
    $.fn.modal.Constructor.prototype.handleUpdate = function () {
        oldHandleUpdate.call(this, arguments);
        this.updateBodyHeight($(this._element));
    };

    $.fn.modal.Constructor.prototype.updateBodyHeight = function ($element) {
        if (!$element.hasClass('modal-bottom')) {
            return;
        }
        var height = $element.find('.modal-header').outerHeight() + $element.find('.modal-footer').outerHeight() - 1;
        $element.find('.modal-body').css('max-height', $(window).height() - height);
    };

    // 解决iOS底部弹窗后可以继续往下滚动的问题
    // https://github.com/twbs/bootstrap/issues/14839
    var scrollTop = 0;
    var $doc = $(document);
    var $root = $('html, body');
    var $body = $('body');
    $doc.on('show.bs.modal', '.modal-bottom', function() {
        scrollTop = $body.scrollTop();
        $root.addClass('modal-fixfixed');
    });

    $doc.on('hide.bs.modal', '.modal-bottom', function() {
        $root.removeClass('modal-fixfixed');
        $body.scrollTop(scrollTop);
    });
})(jQuery);
