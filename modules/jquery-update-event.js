(function ($) {
  // From http://code.google.com/p/jquery-debounce/
  var debounce = function (fn, timeout) {
    var timer;
    return function () {
      var args = arguments;
      var ctx = this;
      clearTimeout(timer);
      timer = setTimeout(function () {
        fn.apply(ctx, args);
        timer = null;
      }, timeout);
    };
  };

  $.event.special.update = {
    setup: function () {
      var $this = $(this);
      $this.on('change', 'select', function () {
        $this.trigger('update');
      });
      $this.on('keyup change', 'input', debounce(function () {
        $this.trigger('update');
      }, 300));
    }
  };
})(jQuery);


