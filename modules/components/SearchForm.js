import React from 'react';
import {findDOMNode} from 'react-dom';
import PropTypes from 'prop-types';
import 'load-query';
import '../styles/_search-form.scss';
import {Form} from "react-bootstrap";

class SearchForm extends React.Component {
  componentDidMount () {
    if (this.props.loadQuery) {
      $(findDOMNode(this)).loadQuery();
    }
  }

  render () {
    return (
      <Form horizontal className={this.props.className + ' search-form well'}>
        {this.props.children}
      </Form>
    );
  }
}

SearchForm.defaultProps = {
  loadQuery: true
};

SearchForm.propTypes = {
  loadQuery: PropTypes.bool
};

export default SearchForm
