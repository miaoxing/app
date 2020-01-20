import React from 'react';
import PageHeader from './PageHeader';

class Page extends React.Component {
  render () {
    var firstChild = React.Children.toArray(this.props.children)[0];

    return (
      <div className="page-wrapper p-4 bg-white">
        {firstChild.type !== <PageHeader />.type && <PageHeader />}
        {this.props.children}
      </div>
    );
  }
}

export default Page
