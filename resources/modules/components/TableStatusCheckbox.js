import React from 'react';
import {withTable} from "components/TableProvider";
import app from "app";
import {FormCheck} from "react-bootstrap";

// 记录checkbox状态，以免被外部重置
const store = {};

@withTable
export default class TableStatusCheckbox extends React.Component {
  state = {
    checked: this.getValue()
  };

  handleChange = () => {
    const checked = !this.state.checked;

    // 更改时，将状态记录起来
    store[this.props.row.id] = checked;

    this.setState({checked: checked});
    app.post(this.props.url || app.actionUrl('update'), {
      id: this.props.row.id,
      [this.props.name]: +checked,
    }).then(ret => {
      app.ret(ret);

      // 重载数据，加载新的状态
      this.props.table.reload();

      // 更改后,删除状态
      delete store[this.props.row.id];
    });
  };

  getValue() {
    // 如果有更改过，显示更改过的状态
    if (typeof store[this.props.row.id] !== 'undefined') {
      return store[this.props.row.id]
    }

    let value = this.props.row[this.props.name];
    // 兼容数据库返回
    return value === '0' ? false : !!value;
  }

  render() {
    return <FormCheck
      custom
      className="custom-control-no-text"
      label={' '}
      id={'table-status-toggle-' + this.props.row.id}
      checked={this.state.checked}
      onChange={this.handleChange}
    />
  }
}
