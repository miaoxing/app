import React from 'react';
import {Form as RbForm} from 'react-bootstrap';
import {Formik} from 'formik';
import {withRouter} from 'react-router-dom';
import mapValues from 'lodash/mapValues';

class Form extends React.Component {
  render() {
    if (Object.keys(this.props.initialValues).length === 0) {
      return '';
    }

    // Warning: `value` prop on `input` should not be null.
    // Consider using an empty string to clear the component or `undefined` for uncontrolled components.
    const initialValues = mapValues(this.props.initialValues, value => value === null ? '' : value);

    return (
      <Formik
        initialValues={initialValues}
        enableReinitialize={true}
        onSubmit={(values, actions) => {
          $.ajax({
            url: this.props.url,
            type: 'post',
            loading: true,
            data: values,
            dataType: 'json'
          }).done((ret) => {
            $.msg(ret, () => {
              if (ret.code === 1) {
                this.redirect(this.getRedirectUrl());
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

  redirect(url) {
    if (url !== this.props.history.location.pathname) {
      this.props.history.push(url);
    }
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
