import React from 'react';

import Form from './Form.jsx';
import 'plugins/admin/css/filter.css';

class SearchForm extends React.Component {
  render () {
    return (
      <Form horizontal className={this.props.className + ' search-form well'}>
        {this.props.children}
      </Form>
    );
  }
}

export default SearchForm
