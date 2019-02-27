import React from 'react';
import 'plugins/verify-code/js/verify-code';
import Field from "components/Field";

class MobileVerifyCode extends React.Component {
  static defaultProps = {
    name: 'verifyCode',
    maxLength: 6,
  };

  componentDidUpdate() {
    let options = {};
    if (this.props.url) {
      options.url = this.props.url;
    }

    $('.js-verify-code-send').verifyCode(options);
  }

  render() {
    if (this.props.defaultMobile && this.props.defaultMobile === this.props.mobile) {
      return '';
    }

    return <div className="js-verify-code-from-group form-group">
      <label htmlFor="verify-code" className="control-label">
        验证码{' '}
        <span className="text-warning">*</span>
      </label>
      <div className="col-control">
        <div className="input-group">
          <Field type="tel" className="form-control" id="verify-code" name={this.props.name} placeholder="请输入验证码"
            maxLength={this.props.maxLength}/>
          <span className="input-group-append">
            <button type="button" className="js-verify-code-send btn btn-outline-primary">
              获取验证码
            </button>
          </span>
        </div>
      </div>
    </div>;
  }
}

export default MobileVerifyCode;
