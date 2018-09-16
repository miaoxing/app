import React from "react";
import {ControlLabel, FormGroup} from "react-bootstrap";
import {connect} from "formik";
import moment from 'moment';
import Required from "components/Required.jsx";
import DatePicker from "components/DatePicker";

class FormItemDatePicker extends React.Component {
  handleChange(date) {
    this.props.formik.setFieldValue(this.props.name, date ? date.format('YYYY-MM-DD') : '');
  }

  render() {
    const {label, name, formik, placeholder, ...rest} = this.props;
    if (placeholder) {
      rest.placeholderText = placeholder;
    }

    return <FormGroup>
      <ControlLabel>
        {label}
        {this.props.required && <React.Fragment>{' '}<Required/></React.Fragment>}
      </ControlLabel>
      <div className="col-control">
        <DatePicker
          selected={formik.values[name] ? moment(formik.values[name]) : null}
          onChangeDate={this.handleChange.bind(this)}
          {...rest}
        />
      </div>
    </FormGroup>
  }
}

export default connect(FormItemDatePicker);
