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

  constructor(props, context) {
    super(props, context);

    const values = props.formik.values;
    this.state = {
      dateMin: values[this.props.minName] ? moment(values[this.props.minName]) : null,
      dateMax: values[this.props.maxName] ? moment(values[this.props.maxName]) : null,
    };
  }

  handleChangeStart(dateMin) {
    const dateValue = dateMin ? dateMin.format('YY-MM-DD HH:mm:ss') : '';
    let state = {dateMin};

    if (dateMin && dateMin.isAfter(this.state.dateMax)) {
      state.dateMax = dateMin;
      this.props.formik.setFieldValue(this.props.maxName, dateValue);
    }

    this.setState(state);
    this.props.formik.setFieldValue(this.props.minName, dateValue);
  }

  handleChangeEnd(dateMax) {
    const dateValue = dateMax ? dateMax.format('YY-MM-DD HH:mm:ss') : '';
    let state = {dateMax};

    if (dateMax && dateMax.isBefore(this.state.dateMin)) {
      state.dateMin = dateMax;
      this.props.formik.setFieldValue(this.props.minName, dateValue);
    }

    this.setState(state);
    this.props.formik.setFieldValue(this.props.maxName, dateValue);
  }

  render() {
    return <React.Fragment>
      <FormItem
        label={'开始' + this.props.label + '时间'}
        control={<DatePicker
          selected={this.state.dateMin}
          selectsStart
          startDate={this.state.dateMin}
          endDate={this.state.dateMax}
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
          selected={this.state.dateMax}
          selectsEnd
          startDate={this.state.dateMin}
          endDate={this.state.dateMax}
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
