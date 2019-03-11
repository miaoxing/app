import React from 'react';

class PageHeader extends React.Component {
  render() {
    return (
      <div className="page-header">
        {this.props.children && <div className="float-right">{this.props.children}</div>}
        <h1>
          {this.props.parentTitle || wei.page.controllerTitle}
          {this.props.title && <small>
            <i className="fa fa-angle-double-right"/>
            {' '}{this.props.title}
          </small>}
        </h1>
      </div>
    );
  }
}

export default PageHeader
