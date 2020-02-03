import React from "react";
import ProTable from '@ant-design/pro-table';
import axios from "axios";

export default class extends React.Component {
  render() {
    const {url, ...restProps} = this.props;

    return (
      <ProTable
        request={(params) => {
          return new Promise(resolve => {
            axios.get(url).then(({data}) => {
              resolve(data)
            });
          });
        }}
        options={false}
        search={false}
        rowKey="id"
        toolBarRender={false}
        onChange={(pagination, filters, sorter, extra) => {
          this.ref.current.reload();
          console.log('params', pagination, filters, sorter, extra);
        }}
        {...restProps}
      />
    );
  }
}
