import React from 'react';
import FormItem from './FormItem';

class SearchItem extends React.Component {
  render() {
    return (
      <FormItem component={React.Fragment} labelSize={1} controlSize={3} groupSize="sm" {...this.props} />
    );
  }
}

export default SearchItem
