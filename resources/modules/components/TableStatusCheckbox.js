import React from 'react';
import {withTable} from "components/TableProvider";
import app from "app";
import {FormCheck} from "react-bootstrap";

@withTable
export default class TableStatusCheckbox extends React.Component {
  handleChange = () => {
    app.post(this.props.url || app.actionUrl('update'), {
      id: this.props.row.id,
      [this.props.name]: +!this.getValue(),
    }).then(ret => {
      app.ret(ret);
      this.props.table.reload();
    });
  };

  getValue() {
    let value = this.props.row[this.props.name];
    // 兼容数据库返回
    return value === '0' ? 0 : value;
  }

  render() {
    return <FormCheck
      custom
      label={' '}
      id={'table-status-toggle-' + this.props.row.id}
      checked={this.getValue()}
      onChange={this.handleChange}
    />
  }
}
