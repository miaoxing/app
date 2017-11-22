import jQueryUnparam from 'jquery-unparam';
import jQueryPopulate from 'jquery-populate';

export default Promise.all([jQueryUnparam, jQueryPopulate]).then(() => {
  $.fn.loadQuery = function () {
    return this.populate($.unparam(location.search.substring(1)));
  };
});
