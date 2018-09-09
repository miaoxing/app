import React from 'react';
import 'plugins/verify-code/js/verify-code'
import {Field} from "formik";

class MobileVerifyCode extends React.Component {
  componentDidUpdate() {
    $('.js-verify-code-send').verifyCode({
      url: this.props.url || '',
    });
  }

  render() {
    if (this.props.defaultMobile && this.props.defaultMobile === this.props.mobile) {
      return '';
    }

    return <div className="form-group">
      <style>
        {`
        .text-primary.disabled {
          color: #a6a6a6 !important;
        }
        `}
      </style>
      <label htmlFor="verify-code" className="control-label">
        验证码{' '}
        <span className="text-warning">*</span>
      </label>
      <div className="col-control">
        <div className="input-group">
          <Field type="tel" className="form-control" id="verify-code" name="verifyCode" placeholder="请输入验证码"/>
          <span className="input-group-btn border-left">
            <button type="button" className="js-verify-code-send text-primary btn btn-default form-link">
              获取验证码
            </button>
          </span>
        </div>
      </div>
    </div>
  }
}

export default MobileVerifyCode;
