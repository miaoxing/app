(function ($) {
    $(document).on('click', '.has-clear .form-control-feedback', function () {
        var target = $(this).data('target') || $(this).prev();
        $(target).val('');
    });
})(jQuery);
(function ($) {
    var Loading = function (options) {
        options && $.extend(this, options);
    };

    $.extend(Loading.prototype, {
        $el: null,
        $loadingEl: null,
        tpl: '<div class="loading-overlay">' +
            '<div class="loading-content">' +
                '<i class="loading-spinner"></i>' +
                '<p></p>' +
            '</div>' +
        '</div>',
        content: '加载中...',
        show: function () {
            if (this.$loadingEl) {
                this.$loadingEl.remove();
            }
            this.$loadingEl = $(this.tpl);
            this.$loadingEl.find('p').html(this.content);
            this.$el.append(this.$loadingEl);
            this.$loadingEl.show();
        },
        hide: function () {
            this.$loadingEl.hide();
        }
    });

    $.fn.loading = function (option) {
        return this.each(function () {
            var $this = $(this);
            var data = $this.data('loading');
            var options = typeof option == 'object' ? option : {};
            options.$el = $this;

            if (!data) {
                $this.data('loading', (data = new Loading(options)));
            } else {
                $.extend(data, options);
            }
            if (typeof option == 'string') data[option]();
        });
    };
    $.fn.loading.Constructor = Loading;

    $.loading = function (options) {
        return $('body').loading(options);
    };
} ($));
(function ($) {
    // 对底部modal框超出屏幕高度做自适应
    var oldShow = $.fn.modal.Constructor.prototype.show;
    $.fn.modal.Constructor.prototype.show = function () {
        oldShow.call(this, arguments);
        this.updateBodyHeight(this.$element);
    };

    var oldHandleUpdate = $.fn.modal.Constructor.prototype.handleUpdate;
    $.fn.modal.Constructor.prototype.handleUpdate = function () {
        oldHandleUpdate.call(this, arguments);
        this.updateBodyHeight(this.$element);
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
    var $win = $(window);
    $doc.on('show.bs.modal', '.modal-bottom', function() {
        scrollTop = $win.scrollTop();
        $root.addClass('modal-fixfixed');
    });

    $doc.on('hide.bs.modal', '.modal-bottom', function() {
        $root.removeClass('modal-fixfixed');
        $win.scrollTop(scrollTop);
    });
})(jQuery);
/**
 * @link http://bootsnipp.com/snippets/featured/bootstrap-number-spinner
 * @link https://github.com/istvan-ujjmeszaros/bootstrap-touchspin
 * @todo 转为一个插件,提供外部接口
 */
(function ($) {
    $(document).on('click', '.number-spinner button', function () {
        var btn = $(this),
            oldValue = btn.closest('.number-spinner').find('input').val().trim(),
            newVal = 0;

        if (btn.attr('data-dir') == 'up') {
            newVal = parseInt(oldValue) + 1;
        } else {
            if (oldValue > 1) {
                newVal = parseInt(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        btn.closest('.number-spinner').find('input').val(newVal).trigger('changed');
    });
}($));
