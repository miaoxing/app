import React from 'react';
import {findDOMNode} from 'react-dom';
import PropTypes from 'prop-types';

import Form from './Form';
import '../styles/_search-form.scss';

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
