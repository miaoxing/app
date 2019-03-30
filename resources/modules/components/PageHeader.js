import React from 'react';

class PageHeader extends React.Component {
  render() {
    return (
      <div className="page-header d-flex flex-wrap">
        <h1>
          {this.props.parentTitle || wei.page.controllerTitle}
          {this.props.title && <small>
            <i className="fa fa-angle-double-right"/>
            {' '}{this.props.title}
          </small>}
        </h1>
        {this.props.children && <div className="ml-auto">{this.props.children}</div>}
      </div>
    );
  }
}

export default PageHeader
