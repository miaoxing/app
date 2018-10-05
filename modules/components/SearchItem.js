import React from 'react';
import FormItem from './FormItem';

class SearchItem extends React.Component {
  render () {
    return (
      <FormItem {...this.props} labelSize={1} controlSize={3} groupSize="sm" />
    );
  }
}

export default SearchItem