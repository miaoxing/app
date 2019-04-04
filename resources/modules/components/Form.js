import React from 'react';
import propTypes from 'prop-types';
import {Formik, Form as FormikForm} from 'formik';
import {withRouter} from 'react-router-dom';
import app from 'app';
import axios from 'axios';

/**
 * 在基础的表单上增加了
 *
 * 1. 点击提交数据发送到后台
 * 2. 提交成功后跳转到相应页面
 */
class Form extends React.Component {
  static propTypes = {
    /**
     * 提交到后台的地址，默认自动识别为当前表单地址
     */
    url: propTypes.string,

    /**
     * 获取表单数据的后台地址
     */
    valuesUrl: propTypes.oneOfType([propTypes.string, propTypes.bool]),

    /**
     * 提交成功后跳转的地址，默认为上一级页面
     */
    redirectUrl: propTypes.string,

    /**
     * 渲染子组件
     */
    render: propTypes.func,
  };

  state = {
    initialValues: this.props.initialValues,
  };

  static getDerivedStateFromProps(props, state) {
    if (props.initialValues && props.initialValues !== state.initialValues) {
      return {
        initialValues: props.initialValues,
      };
    }
    return null;
  }

  handleSubmit = (values) => {
    axios({
      url: this.getSubmitUrl(),
      method: 'post',
      data: values,
      loading: true,
    }).then(({data: ret}) => {
      app.ret(ret).suc(() => {
        this.redirect(this.getRedirectUrl());
      });
    });
  };

  redirect(url) {
    if (url !== this.props.history.location.pathname) {
      this.props.history.push(url);
    }
  }

  getSubmitUrl() {
    return this.props.url || app.curFormUrl();
  }

  getRedirectUrl() {
    if (this.props.redirectUrl) {
      return this.props.redirectUrl;
    } else {
      // 自动跳转到上一页
      const url = this.getSubmitUrl();
      return url.substring(0, url.lastIndexOf('/'));
    }
  }

  getValuesUrl() {
    if (typeof this.props.valuesUrl === 'undefined') {
      return window.location.href;
    }

    return this.props.valuesUrl;
  }

  componentDidMount() {
    if (this.props.initialValues) {
      return;
    }

    const valuesUrl = this.getValuesUrl();
    if (valuesUrl !== false) {
      app.get(valuesUrl).then(ret => {
        this.setState({initialValues: this.filterValues(ret.data)});
      });
    }
  }

  /**
   * 将输入项的值从 null 转换为空字符,因为 React input 值不允许为 null
   *
   * @param object data
   * @returns object
   */
  filterValues(data) {
    Object.keys(data).forEach(key => {
      if (data[key] === null) {
        data[key] = '';
      }
    });
    return data;
  }

  render() {
    return (
      <Formik
        initialValues={this.state.initialValues}
        enableReinitialize={true}
        onSubmit={this.handleSubmit}
        render={(props) => (
          <FormikForm>
            {this.props.render ? this.props.render(props) : this.props.children}
          </FormikForm>
        )}
      />
    );
  }
}

export default withRouter(Form);
