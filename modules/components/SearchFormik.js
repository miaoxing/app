import '../styles/_search-form.scss';
import React from 'react';
import {findDOMNode} from 'react-dom';
import PropTypes from 'prop-types';
import 'load-query';
import {Form} from "react-bootstrap";
import {withTable} from "components/TableProvider";
import {Formik} from "formik";
import _ from 'lodash';

class SearchFormik extends React.Component {
  static defaultProps = {
    loadQuery: true
  };

  static propTypes = {
    loadQuery: PropTypes.bool
  };

  delay = 300;

  componentDidMount() {
    const $this = $(findDOMNode(this));

    /*if (this.props.loadQuery) {
      $this.loadQuery();
    }*/
  }

  handleChange = (submitForm, e) => {
    if (e.target.type === 'text') {
      this.handleTextChange(submitForm);
    } else {
      submitForm();
    }
  };

  handleTextChange = _.debounce((submitForm) => submitForm(), this.delay);

  handleSubmit = (values) => {
    this.props.table.handleSearch && this.props.table.handleSearch(values);
  };

  render() {
    const {className, loadQuery, ...rest} = this.props;
    return <Formik
      onSubmit={this.handleSubmit}
      render={({submitForm}) => (
        <Form horizontal
          className={(className ? className + ' ' : '') + 'search-form well'}
          onChange={this.handleChange.bind(this, submitForm)}
          {...rest}
        >
          {this.props.children}
        </Form>
      )}
    />;
  }
}

export default withTable(SearchFormik);
