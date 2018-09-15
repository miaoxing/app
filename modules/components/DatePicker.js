import React from "react";
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

class MyDatePicker extends React.Component {
  render() {
    const {...rest} = this.props;

    return <StyledDatePicker>
        <DatePicker
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
  }
}

export default MyDatePicker;
