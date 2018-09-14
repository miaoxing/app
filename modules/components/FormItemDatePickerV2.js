import React from "react";
import {ControlLabel, FormGroup} from "react-bootstrap";
import {connect} from "formik";
import styled from 'styled-components';
import Required from "components/Required.jsx";
import moment from "moment";
import 'react-dates/initialize';
import {SingleDatePicker} from 'react-dates';
import 'react-dates/lib/css/_datepicker.css';

moment.locale('zh-cn');

const StyledSingleDatePicker = styled.div`
  .SingleDatePickerInput {
    background: transparent;
  }
  
  .DateInput {
    display: block;
    background: transparent;
  }
  
  .DateInput_input {
    font-weight: normal;
    font-size: inherit;
    padding: 0;
    background: transparent;
  }
  
  .DateInput_input::-webkit-input-placeholder {
    color: #999;
  }
`;

class FormItemDatePickerV2 extends React.Component {
  state = {
    focused: false
  };

  handleDateChange(date) {
    this.props.formik.setFieldValue(this.props.name, date ? date.format('YYYY-MM-DD') : '');
  }

  render() {
    const {label, name, formik, ...rest} = this.props;

    return <FormGroup>
      <ControlLabel>
        {label}
        {this.props.required && <React.Fragment>{' '}<Required/></React.Fragment>}
      </ControlLabel>
      <div className="col-control">
        <StyledSingleDatePicker>
          <SingleDatePicker
            date={formik.values[name] ? moment(formik.values[name]) : null}
            onDateChange={this.handleDateChange.bind(this)}
            focused={this.state.focused}
            onFocusChange={({focused}) => this.setState({focused})}
            withFullScreenPortal={true}
            orientation="vertical"
            noBorder={true}
            block={true}
            readOnly={true}
            displayFormat="YYYY-MM-DD"
            showClearDate={true}
            isOutsideRange={() => false}
            {...rest}
          />
        </StyledSingleDatePicker>
      </div>
    </FormGroup>
  }
}

export default connect(FormItemDatePickerV2);
