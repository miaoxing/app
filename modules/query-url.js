import jQueryUnparam from 'jquery-unparam';

export default jQueryUnparam.then(function () {
  // NOTE 加上版本号,避免被老的覆盖
  $.queryUrl2 = function (url, args) {
    var params = $.unparam(location.search.substring(1));
    return $.url(url, typeof args != 'undefined' ? args : params, args);
  };
});
