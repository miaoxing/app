import React from 'react';
import PageHeader from './PageHeader.jsx';

class Page extends React.Component {
  render () {
    var firstChild = React.Children.toArray(this.props.children)[0];

    return (
      <div className="page-wrapper">
        {firstChild.type !== PageHeader && <PageHeader />}
        {this.props.children}
      </div>
    );
  }
}

export default Page
