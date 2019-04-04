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
     * 提交成功后跳转的地址，默认为上一级页面
     */
    redirectUrl: propTypes.string,
  };

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

  render() {
    return (
      <Formik
        initialValues={this.props.initialValues}
        enableReinitialize={true}
        onSubmit={this.handleSubmit}
        render={() => (
          <FormikForm>
            {this.props.children}
          </FormikForm>
        )}
      />
    );
  }
}

export default withRouter(Form);
