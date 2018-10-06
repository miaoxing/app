import React from "react";
import {ControlLabel, FormGroup} from "react-bootstrap";
import DatePicker from 'components/DatePicker'
import moment from "moment";
import 'jquery-unparam';
import 'react-datepicker/dist/react-datepicker.css';

class DateRangeFromGroup extends React.Component {
  constructor(props, context) {
    super(props, context);

    const params = $.unparam(location.search.substring(1));
    this.state = {
      dateMin: params[this.props.name + 'Min'] ? moment(params[this.props.name + 'Min']) : null,
      dateMax: params[this.props.name + 'Max'] ? moment(params[this.props.name + 'Max']) : null,
    };
  }

  handleChangeStart(dateMin) {
    let state = {dateMin};

    if (dateMin && dateMin.isAfter(this.state.dateMax)) {
      state.dateMax = dateMin;
    }

    this.setState(state);
  }

  handleChangeEnd(dateMax) {
    let state = {dateMax};

    if (dateMax && dateMax.isBefore(this.state.dateMin)) {
      state.dateMin = dateMax;
    }

    this.setState(state);
  }

  render() {
    return <React.Fragment>
      <style>
        {`
          .form .control-label {
            width: 7em;
          }
        `}
      </style>
      <FormGroup>
        <ControlLabel>开始{this.props.label}日期</ControlLabel>
        <div className="col-control">
          <DatePicker
            selected={this.state.dateMin}
            selectsStart
            startDate={this.state.dateMin}
            endDate={this.state.dateMax}
            onChange={this.handleChangeStart.bind(this)}
            name={this.props.name + 'Min'}
            placeholderText="请选择日期"
          />
        </div>
      </FormGroup>
      <FormGroup>
        <ControlLabel>结束{this.props.label}日期</ControlLabel>
        <div className="col-control">
          <DatePicker
            selected={this.state.dateMax}
            selectsEnd
            startDate={this.state.dateMin}
            endDate={this.state.dateMax}
            onChange={this.handleChangeEnd.bind(this)}
            name={this.props.name + 'Max'}
            placeholderText="请选择日期"
          />
        </div>
      </FormGroup>
    </React.Fragment>
  }
}

export default DateRangeFromGroup;
