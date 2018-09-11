import React from "react";
import {ControlLabel, FormGroup} from "react-bootstrap";
import DatePicker from "react-mobile-datepicker";
import moment from "moment";
import FormItem3 from "components/FormItem3";
import {connect} from "formik";

class FromItemDatePicker extends React.Component {
  state = {
    isOpen: false,
  };

  handleDatePickerClick(e) {
    this.setState({isOpen: true});
  }

  handleDatePickerCancel() {
    this.setState({isOpen: false});
  }

  handleDatePickerSelect(time) {
    this.props.formik.setFieldValue(this.props.name, moment(time).format('YYYY-MM-DD'));
    this.setState({isOpen: false});
  }

  render() {
    const {...rest} = this.props;
    return <React.Fragment>
      <FormItem3 readOnly {...rest} onClick={this.handleDatePickerClick.bind(this)}/>
      <DatePicker
        value={this.props.formik.values[this.props.name] ?
          new Date(this.props.formik.values[this.props.name]) : new Date()}
        isOpen={this.state.isOpen}
        onSelect={this.handleDatePickerSelect.bind(this)}
        onCancel={this.handleDatePickerCancel.bind(this)}
        theme="ios"
        showFormat="YYYY-MM-DD"/>
    </React.Fragment>
  }
}

export default connect(FromItemDatePicker);
