import React from "react";
import DatePicker from 'components/DatePicker'
import moment from "moment";
import 'jquery-unparam';
import 'react-datepicker/dist/react-datepicker.css';
import FormItem from "components/FormItem";
import {connect} from "formik";

class FormItemDateTimeRange extends React.Component {
  static defaultProps = {
    label: '',
    minName: 'startedAt',
    maxName: 'endedAt'
  };

  handleChangeStart(dateMin) {
    const dateValue = this.format(dateMin);
    const dateMax = this.moment(this.props.formik.values[this.props.dateMax]);

    if (dateMin && dateMin.isAfter(dateMax)) {
      this.props.formik.setFieldValue(this.props.maxName, dateValue);
    }

    this.props.formik.setFieldValue(this.props.minName, dateValue);
  }

  handleChangeEnd(dateMax) {
    const dateValue = this.format(dateMax);
    const dateMin = this.moment(this.props.formik.values[this.props.dateMin]);

    if (dateMax && dateMax.isBefore(dateMin)) {
      this.props.formik.setFieldValue(this.props.minName, dateValue);
    }

    this.props.formik.setFieldValue(this.props.maxName, dateValue);
  }

  format(value) {
    return value ? value.format('YYYY-MM-DD HH:mm:ss') : '';
  }

  moment(value) {
    return value ? moment(value) : null;
  }

  render() {
    const dateMin = this.moment(this.props.formik.values[this.props.minName]);
    const dateMax = this.moment(this.props.formik.values[this.props.maxName]);

    return <React.Fragment>
      <FormItem
        label={'开始' + this.props.label + '时间'}
        control={<DatePicker
          selected={dateMin}
          selectsStart
          startDate={dateMin}
          endDate={dateMax}
          onChange={this.handleChangeStart.bind(this)}
          name={this.props.minName}
          dateFormat="YYYY-MM-DD HH:mm:00"
          showTimeSelect
          timeFormat="HH:mm"
          timeIntervals={10}
          withPortal={false}
          timeCaption="时间"
        />}
      />
      <FormItem
        label={'结束' + this.props.label + '时间'}
        control={<DatePicker
          selected={dateMax}
          selectsEnd
          startDate={dateMin}
          endDate={dateMax}
          onChange={this.handleChangeEnd.bind(this)}
          name={this.props.maxName}
          dateFormat="YYYY-MM-DD HH:mm:00"
          showTimeSelect
          timeFormat="HH:mm"
          timeIntervals={10}
          withPortal={false}
          timeCaption="时间"
        />}
      />
    </React.Fragment>
  }
}

export default connect(FormItemDateTimeRange);
