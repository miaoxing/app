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
  state = {
    isOpen: false
  };

  handleChange = date => {
    this.props.onChangeDate && this.props.onChangeDate(date);
    this.toggleCalendar();
  };

  toggleCalendar = e => {
    e && e.preventDefault();
    this.setState({isOpen: !this.state.isOpen});
  };

  render() {
    const {selected, onChangeDate, ...rest} = this.props;

    return <StyledDatePicker>
      <input type="text"
        className="form-control"
        onClick={this.toggleCalendar}
        readOnly
        value={this.props.selected ? this.props.selected.format('YYYY-MM-DD') : ''}
        onChange={() => {
        }}
      />
      {this.state.isOpen && <DatePicker
        selected={selected}
        dateFormat="YYYY-MM-DD"
        todayButton="今天"
        withPortal
        isClearable
        peekNextMonth
        showMonthDropdown
        showYearDropdown
        dropdownMode="select"
        locale="zh-cn"
        inline
        onChange={this.handleChange}
        {...rest}
      />}
    </StyledDatePicker>
  }
}

export default MyDatePicker;
