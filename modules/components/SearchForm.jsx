import React from 'react';
import {Well, FormGroup} from 'react-bootstrap';

import Form from './Form.jsx';
import 'plugins/admin/css/filter.css';

class SearchForm extends React.Component {
  render () {
    return (
      <Form horizontal className={this.props.className + ' filter-form'}>
        <Well className="form-well m-b">
          <FormGroup bsSize="sm">
            {this.props.children}
          </FormGroup>
        </Well>
      </Form>
    );
  }
}

export default SearchForm