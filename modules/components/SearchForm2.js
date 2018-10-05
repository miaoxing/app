import React from 'react';
import {findDOMNode} from 'react-dom';
import PropTypes from 'prop-types';
import 'jquery-update-event';

import Form from './Form.jsx';
import '../styles/_search-form.scss';

class SearchForm2 extends React.Component {
  componentDidMount () {
    const $this = $(findDOMNode(this));

    if (this.props.loadQuery) {
      $this.loadQuery();
    }

    $this.on('update', () => {
      this.props.onFilter && this.props.onFilter();
    });
  }

  render () {
    return (
      <Form horizontal className={this.props.className + ' search-form well'}>
        {this.props.children}
      </Form>
    );
  }
}

SearchForm2.defaultProps = {
  loadQuery: true
};

SearchForm2.propTypes = {
  loadQuery: PropTypes.bool
};

export default SearchForm2;
