import '../styles/_search-form.scss';
import React from 'react';
import {findDOMNode} from 'react-dom';
import PropTypes from 'prop-types';
import 'jquery-update-event';
import 'load-query';
import {Form} from "react-bootstrap";
import {TableContext} from "components/Table";

class SearchForm extends React.Component {
  handleSearch = () => {};

  componentDidMount() {
    const $this = $(findDOMNode(this));

    if (this.props.loadQuery) {
      $this.loadQuery();
    }

    $this.on('update', () => {
      // if (!this.props.onFilter) {
      //   return;
      // }

      let params = {};
      $($this.serializeArray()).each((index, obj) => {
        params[obj.name] = obj.value;
      });

      // this.props.onFilter(params);

      this.handleSearch(params);
    });
  }

  render() {
    return <TableContext.Consumer>
      {({handleSearch}) => {
        this.handleSearch = handleSearch;
        return <Form horizontal className={this.props.className + ' search-form well'}>
          {this.props.children}
        </Form>;
      }}
    </TableContext.Consumer>;
  }
}

SearchForm.defaultProps = {
  loadQuery: true
};

SearchForm.propTypes = {
  loadQuery: PropTypes.bool
};

export default SearchForm;
