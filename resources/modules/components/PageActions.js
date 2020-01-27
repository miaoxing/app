import React from "react";
import Actions from "components/Actions";

export default class extends React.Component {
  render() {
    return (
      <div className="page-actions">
        <Actions>
          {this.props.children}
        </Actions>
      </div>
    );
  }
}
