(function ($) {
    $(document).on('click', '.has-clear .form-control-feedback', function () {
        var target = $(this).data('target') || $(this).prev();
        $(target).val('');
    });
})(jQuery);