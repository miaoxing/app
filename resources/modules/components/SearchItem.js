import React from 'react';
import {FormItem} from '@miaoxing/form';

class SearchItem extends React.Component {
  render() {
    return (
      <FormItem container={React.Fragment} labelSize={1} controlSize={3} {...this.props} />
    );
  }
}

export default SearchItem
