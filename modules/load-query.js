export default import('./jquery-deparam').then(function () {
  $.fn.loadParams = function () {
    return this.loadJSON($.deparam(location.search.substring(1)));
  };
});
