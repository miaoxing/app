import React from 'react';
import rp from 'require-promise';
import SearchItem from 'components/SearchItem';
import decamelize from 'decamelize';
import moment from 'moment';
import 'bootstrap-daterangepicker/daterangepicker';
import 'bootstrap-daterangepicker/daterangepicker.css';

class SearchDateRangePicker extends React.Component {
  static defaultProps = {
    min: 'Min',
    max: 'Max',
  };

  id = decamelize(this.props.name, '-');
  format = 'YYYY-MM-DD';

  componentDidMount() {
    const now = moment();
    $('.js-' + this.id).daterangepicker({
      autoUpdateInput: false,
      showDropdowns: true,
      alwaysShowCalendars: true,
      locale: {
        separator: ' ~ ',
        format: this.format,
        applyLabel: '确定',
        cancelLabel: '清空',
        customRangeLabel: '自定义范围',
        daysOfWeek: moment.weekdaysMin(),
        monthNames: moment.monthsShort(),
      },
      ranges: {
        '今天': [now, now],
        '本周': [moment().startOf('isoweek'), moment().endOf('isoweek')],
        /*'昨天': [moment().subtract(1, 'days'), moment().subtract('days', 1)],*/
        '过去7天': [moment().subtract(6, 'days'), now],
        '过去30天': [moment().subtract(29, 'days'), now],
        '本月': [moment().startOf('month'), moment().endOf('month')],
        /*'上月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, month).endOf('month')]*/
        '本季度': [moment().startOf('quarter'), moment().endOf('quarter')],
      }
    }).on('apply.daterangepicker', (ev, picker) => {
      this.updateValues(picker.startDate, picker.endDate);
    }).on('cancel.daterangepicker', (ev, picker) => {
      this.updateValues(null, null);
    });
  }

  updateValues(start, end) {
    $('.js-' + this.id + '-min').val(start ? (start.format(this.format) + ' 00:00:00') : '');
    $('.js-' + this.id + '-max').val(end ? (end.format(this.format) + ' 23:59:59') : '');
    $('.js-' + this.id).val(start ? (start.format(this.format) + ' ~ ' + end.format(this.format)) : '').trigger('change');
  }

  render() {
    return <>
      <SearchItem label={this.props.label} className={'js-' + this.id} autoComplete="off"
        name={this.props.name + 'Range'}/>
      <input type="hidden" className={'js-' + this.id + '-min'} name={this.props.name + this.props.min}/>
      <input type="hidden" className={'js-' + this.id + '-max'} name={this.props.name + this.props.max}/>
    </>;
  }
}

export default SearchDateRangePicker;
