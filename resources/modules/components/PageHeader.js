import React from 'react';

class PageHeader extends React.Component {
  render() {
    return (
      <div className="page-header d-flex flex-wrap">
        {this.props.children}
      </div>
    );
  }
}

export default PageHeader
