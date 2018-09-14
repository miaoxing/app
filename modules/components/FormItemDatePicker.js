import React from "react";
import {ControlLabel, FormGroup} from "react-bootstrap";
import {connect} from "formik";
import moment from 'moment';
import Required from "components/Required.jsx";
import DatePicker from "react-datepicker";
import 'react-datepicker/dist/react-datepicker.css';
import styled from "styled-components";

const StyledDatePicker = styled.div`
  .react-datepicker__input-container {
    display: block;
  }
  .react-datepicker__close-icon::after {
    background-color: transparent;
    color: #d6d6d6;
    font-size: 24px;
    margin: -15px 0 0 0;
    right: 15px;
  }
`;

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
      <StyledDatePicker className="col-control">
        <DatePicker
          selected={formik.values[name] ? moment(formik.values[name]) : null}
          onChange={this.handleChange.bind(this)}
          className="form-control"
          dateFormat="YYYY-MM-DD"
          todayButton="今天"
          withPortal
          isClearable
          peekNextMonth
          showMonthDropdown
          showYearDropdown
          dropdownMode="select"
          readOnly
          locale="zh-cn"
          {...rest}
        />
      </StyledDatePicker>
    </FormGroup>
  }
}

export default connect(FormItemDatePicker);
