(function ($) {
  var ToggleDisplay = function (options) {
    options && $.extend(this, options);
    this.initialize();
  };

  ToggleDisplay.prototype.$el = null;

  ToggleDisplay.prototype.value = null;

  ToggleDisplay.prototype.target = null;

  ToggleDisplay.prototype.reverseTarget = null;

  ToggleDisplay.prototype.initialize = function () {
    this.change();
    this.$el.change($.proxy(this.change, this));
  };

  ToggleDisplay.prototype.change = function () {
    var match;
    var value = this.value;

    // 如果是:开头，认为是选择器，如:checked
    if (value.substr(0, 1) === ':') {
      match = this.$el.is(value);
    } else {
      match = this.$el.val() === value;
    }

    if (this.target) {
      $(this.target)[match ? 'show' : 'hide']();
    }

    if (this.reverseTarget) {
      $(this.reverseTarget)[match ? 'hide' : 'show']();
    }
  };

  $.fn.toggleDisplay = function (option) {
    var pluginArgs = arguments;
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('toggle-display');
      var options = typeof option == 'object' ? option : {};
      options.$el = $this;

      if (!data) {
        options = $.extend({}, options, $this.data());
        $this.data('toggle-display', (data = new ToggleDisplay(options)));
      } else {
        $.extend(data, options);
      }

      if (typeof option == 'string') {
        var args = [];
        for (var i in pluginArgs) {
          if (i != 0) {
            args.push(pluginArgs[i]);
          }
        }
        data[option].apply(data, args);
      }
    });
  };
  $.fn.toggleDisplay.Constructor = ToggleDisplay;
}(jQuery));

