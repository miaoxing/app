import React from "react";
import {connect} from 'formik';
import app from "app";
import {Button} from "react-bootstrap";

@connect
export default class ExportBtn extends React.Component {
  exportCsv = () => {
    window.location = app.appendUrl(app.curIndexUrl(), Object.assign(this.props.formik.values, {
      page: 1,
      rows: 99999,
      _format: 'csv',
    }));
  };

  render() {
    return <Button variant="secondary" onClick={this.exportCsv}>导出</Button>;
  }
}
