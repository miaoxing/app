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