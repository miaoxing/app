import React from 'react';
import {Table} from 'react-bootstrap';

class DataTable extends React.Component {
  render () {
    return (
      <Table bordered hover responsive className={this.props.className + ' table-center'} />
    );
  }
}

export default DataTable
