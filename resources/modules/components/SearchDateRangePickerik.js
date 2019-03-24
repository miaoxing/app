import React from 'react';
import rp from 'require-promise';
import SearchItem from 'components/SearchItem';
import decamelize from 'decamelize';
import {connect} from "formik";
import Field from "components/Field";

const loader = Promise.all([
  rp('plugins/admin/js/date-range-picker')
]);

@connect
class SearchDateRangePickerik extends React.Component {
  static defaultProps = {
    min: 'Min',
    max: 'Max',
  };

  id = decamelize(this.props.name, '-');

  componentDidMount() {
    const id = this.id;
    const that = this;
    loader.then(() => {
      $('.js-' + this.id).daterangepicker({
        format: 'YYYY-MM-DD',
        separator: ' ~ '
      }, function (start, end) {
        that.props.formik.setFieldValue(that.props.name + 'Range', start.format(this.format) + '~' + end.format(this.format));
        that.props.formik.setFieldValue(that.props.name + that.props.min, start.format(this.format) + ' 00:00:00');
        that.props.formik.setFieldValue(that.props.name + that.props.max, end.format(this.format) + ' 23:59:59');
        that.props.formik.submitForm();
      });
    });
  }

  render() {
    return <>
      <SearchItem label={this.props.label} className={'js-' + this.id} autoComplete="off"
        name={this.props.name + 'Range'}/>
      <Field type="hidden" name={this.props.name + this.props.min}/>
      <Field type="hidden" name={this.props.name + this.props.max}/>
    </>;
  }
}

export default SearchDateRangePickerik;
