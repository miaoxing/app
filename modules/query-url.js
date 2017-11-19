export default import('./jquery-deparam').then(function () {
  $.queryUrl = function (url, args) {
    var params = $.deparam(location.search.substring(1));
    return $.url(url, typeof args != 'undefined' ? args : params, args);
  };
});
