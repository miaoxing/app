import React from 'react';
import rp from 'require-promise';
import SearchItem from 'components/SearchItem';
import decamelize from 'decamelize';

const loader = Promise.all([
  rp('daterangepicker')
]);

class SearchDateRangePicker extends React.Component {
  min = 'Min';
  max = 'Max';
  id = decamelize(this.props.name, '-');

  componentDidMount() {
    const id = this.id;
    loader.then(() => {
      $('.js-' + this.id).daterangepicker({
        format: 'YYYY-MM-DD',
        separator: ' ~ '
      }, function (start, end) {
        $('.js-' + id + '-min').val(start.format(this.format) + ' 00:00:00');
        $('.js-' + id + '-max').val(end.format(this.format) + ' 23:59:59');
        this.element.trigger('change');
      });
    });
  }

  render() {
    return <React.Fragment>
      <SearchItem label={this.props.label} className={'js-' + this.id} autoComplete="off"/>
      <input type="hidden" className={'js-' + this.id + '-min'} name={this.props.name + this.props.min}/>
      <input type="hidden" className={'js-' + this.id + '-max'} name={this.props.name + this.props.max}/>
    </React.Fragment>;
  }
}

export default SearchDateRangePicker;
