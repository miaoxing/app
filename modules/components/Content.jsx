import React from 'react';
import PageHeader from './PageHeader.jsx';

class Content extends React.Component {
  render () {
    var firstChild = React.Children.toArray(this.props.children)[0];

    return (
      <div className="content-wrapper">
        {firstChild.type !== PageHeader && <PageHeader />}
        {this.props.children}
      </div>
    );
  }
}

export default Content
