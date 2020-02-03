import React, {useRef, useState} from "react";
import ProTable from '@ant-design/pro-table';
import axios from "axios";
import app from 'app';

let querySorter = {};

const getSortPrams = () => {
  // 取消排序后，field 是点击的字段，order 是 undefined
  // 因此判断 order 无值则无需排序
  if (!querySorter.order) {
    return {};
  }

  let {field: sort, order} = querySorter;
  order = order === 'ascend' ? 'asc' : 'desc';

  return  {sort, order};
};

export default ({url, ...restProps}) => {
  const ref = useRef();

  return (
    <ProTable
      actionRef={ref}
      request={({current: page, pageSize: rows, ...params}) => {
        return new Promise(resolve => {
          const fullUrl = app.appendUrl(url, {page, rows, ...getSortPrams(), ...params});
          axios.get(fullUrl).then(({data}) => {
            resolve(data)
          });
        });
      }}
      onRequestError={e => {
        throw e;
      }}
      options={false}
      search={false}
      rowKey="id"
      toolBarRender={false}
      onChange={(pagination, filters, sorter, extra) => {
        querySorter = sorter;
        ref.current.reload();
      }}
      loading={false}
      {...restProps}
    />
  );
}
