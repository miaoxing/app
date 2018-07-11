import React from 'react';
import {Form as RbForm} from 'react-bootstrap';
import {Field, Formik} from 'formik';
import { withRouter } from 'react-router-dom';

class Form extends React.Component {
  render () {
    return (
      <Formik
        initialValues={this.props.initialValues}
        onSubmit={(values, actions) => {
          $.ajax({
            url: this.props.url,
            type: 'post',
            loading: true,
            data: values,
            dataType: 'json',
          }).done((ret) => {
            $.msg(ret, () => {
              if (ret.code === 1) {
                this.props.history.push(this.getRedirectUrl());
              }
            });
          }).always(() => {
            actions.setSubmitting(false);
          });
        }}
        render={({handleSubmit, isSubmitting}) => (
          <RbForm horizontal onSubmit={handleSubmit}>
            {this.props.children}
          </RbForm>
        )}
      />
    );
  }

  getRedirectUrl() {
    // 自动跳转到上一页
    if (this.props.redirectUrl) {
      return this.props.redirectUrl;
    } else {
      return this.props.url.substring(0, this.props.url.lastIndexOf('/'));
    }
  }
}

export default withRouter(Form);
