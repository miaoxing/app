import jQueryDeparam from 'jquery-deparam';
import jQueryPopulate from 'jquery-populate';

export default Promise.all([jQueryDeparam, jQueryPopulate]).then(() => {
  $.fn.loadQuery = function () {
    return this.populate($.deparam(location.search.substring(1)));
  };
});
