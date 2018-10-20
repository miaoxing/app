import React from 'react';
import DatePicker from 'react-datepicker';
import 'react-datepicker/dist/react-datepicker.css';
import styled from 'styled-components';

const StyledDatePicker = styled.div`
  .react-datepicker-wrapper,
  .react-datepicker__input-container {
    display: block;
  }
  .react-datepicker-popper {
    z-index: 100;
  }
  .react-datepicker__close-icon::after {
    background-color: transparent;
    color: #d6d6d6;
    font-size: 24px;
    margin: -14px 0 0 0;
    right: 6px;
    top: 50%;
  }
`;

const CustomInput = (props) => {
  return <input
    type="text"
    onMouseDown={(e) => {
      e.preventDefault();
    }}
    {...props}
  />;
};

class MyDatePicker extends React.Component {
  render() {
    return <StyledDatePicker>
      <DatePicker
        dateFormat="YYYY-MM-DD"
        todayButton="今天"
        withPortal
        isClearable
        peekNextMonth
        showMonthDropdown
        showYearDropdown
        dropdownMode="select"
        locale="zh-cn"
        className="form-control"
        customInput={<CustomInput/>}
        {...this.props}
      />
    </StyledDatePicker>;
  }
}

export default MyDatePicker;
