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