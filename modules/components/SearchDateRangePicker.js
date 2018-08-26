import React from 'react';
import rp from "require-promise";
import SearchItem from "components/SearchItem.jsx";
import decamelize from 'decamelize';

const loader = Promise.all([
  rp('daterangepicker'),
]);

class SearchDateRangePicker extends React.Component {
  id = decamelize(this.props.name, '-');

  componentDidMount() {
    loader.then(() => {
      $('.js-' + this.id).daterangepicker({
        format: 'YYYY-MM-DD',
        separator: ' ~ '
      }, function (start, end) {
        $('.js-' + this.element.attr('id') + '-min').val(start.format(this.format) + ' 00:00:00');
        $('.js-' + this.element.attr('id') + '-max').val(end.format(this.format) + ' 23:59:59');
        this.element.trigger('change');
      });
    });
  }

  render() {
    return <React.Fragment>
      <SearchItem label={this.props.label} className={'js-' + this.id} name={this.props.name} autoComplete="off"/>
      <input type="hidden" className={'js-' + this.id + '-min'} name={this.props.name + 'Min'}/>
      <input type="hidden" className={'js-' + this.id + '-max'} name={this.props.name + 'Max'}/>
    </React.Fragment>
  }
}

export default SearchDateRangePicker;
