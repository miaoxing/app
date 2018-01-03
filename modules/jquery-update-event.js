(function ($) {
  var DELAY_FAST = 300;

  // From http://code.google.com/p/jquery-debounce/
  var debounce = function (fn, timeout) {
    var timer;
    return function () {
      var args = arguments;
      var that = this;
      clearTimeout(timer);
      timer = setTimeout(function () {
        fn.apply(that, args);
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
      }, DELAY_FAST));
    }
  };
}(jQuery));


