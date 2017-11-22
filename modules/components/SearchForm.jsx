import React from 'react';
import {findDOMNode} from 'react-dom';
import PropTypes from 'prop-types';

import Form from './Form.jsx';
import loadQuery from 'load-query';
import 'plugins/admin/css/filter.css';

class SearchForm extends React.Component {
  componentDidMount () {
    if (this.props.loadQuery) {
      loadQuery.then(() => $(findDOMNode(this)).loadQuery());
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
