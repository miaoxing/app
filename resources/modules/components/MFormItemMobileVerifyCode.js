import React from "react";
import MFormItem from "components/MFormItem";
import MobileVerifyCode from "components/MobileVerifyCode";
import verifyNewMobile from 'vendor/miaoxing/verify-code/resources/modules/verify-new-mobile'
import {connect} from "formik";

@connect
export default class extends React.Component {
  static defaultProps = {
    verified: false,
  };

  verifiedMobile;

  handleChange = (e) => {
    console.log('change');
    this.props.formik.handleChange(e);
  };

  showVerifyCode() {
    if (!this.props.verified) {
      return true;
    }

    if (this.verifiedMobile !== this.props.formik.values.mobile) {
      return true;
    }

    return false;
  }

  render() {
    // 记录起验证过的手机号码
    if (!this.verifiedMobile && this.props.verified === true && this.props.formik.values.mobile) {
      this.verifiedMobile = this.props.formik.values.mobile;
    }

    return <>
      <MFormItem label="手机" name="mobile" className="js-mobile" onChange={this.handleChange}/>
      {this.showVerifyCode() && <MobileVerifyCode/>}
    </>;
  }
}
