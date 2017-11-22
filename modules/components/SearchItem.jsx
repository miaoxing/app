import React from 'react';
import FormItem from './FormItem.jsx';

class SearchItem extends React.Component {
  render () {
    return (
      <FormItem {...this.props} labelSize={1} controlSize={3} groupSize="sm" />
    );
  }
}

export default SearchItem
