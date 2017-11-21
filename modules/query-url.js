import jQueryDeparam from 'jquery-deparam';

export default jQueryDeparam.then(function () {
  $.queryUrl = function (url, args) {
    var params = $.deparam(location.search.substring(1));
    return $.url(url, typeof args != 'undefined' ? args : params, args);
  };
});
