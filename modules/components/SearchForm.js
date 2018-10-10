import React from 'react';
import {findDOMNode} from 'react-dom';
import PropTypes from 'prop-types';
import 'jquery-update-event';
import 'load-query';

import '../styles/_search-form.scss';
import {Form} from "react-bootstrap";

class SearchForm extends React.Component {
  componentDidMount () {
    const $this = $(findDOMNode(this));

    if (this.props.loadQuery) {
      $this.loadQuery();
    }

    $this.on('update', () => {
      if (!this.props.onFilter) {
        return;
      }

      let params = {};
      $($this.serializeArray()).each((index, obj) => {
        params[obj.name] = obj.value;
      });

      this.props.onFilter(params);
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

SearchForm.defaultProps = {
  loadQuery: true
};

SearchForm.propTypes = {
  loadQuery: PropTypes.bool
};

export default SearchForm;
