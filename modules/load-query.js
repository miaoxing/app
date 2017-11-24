import 'jquery-unparam';
import 'jquery-populate';

export default $.fn.loadQuery = function () {
  return this.populate($.unparam(location.search.substring(1)));
};
