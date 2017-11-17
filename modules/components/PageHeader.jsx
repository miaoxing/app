import React from 'react';
import {PageHeader as Header} from 'react-bootstrap';

class PageHeader extends React.Component {
  render () {
    return (
      <Header>
        {this.props.children && <div className="pull-right">{this.props.children}</div>}
        {this.props.parentTitle || wei.page.controllerTitle}
        <small>
          <i className="fa fa-angle-double-right" />
          {' '}{this.props.title || wei.page.actionTitle}
        </small>
      </Header>
    );
  }
}

export default PageHeader
