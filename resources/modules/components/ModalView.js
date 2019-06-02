import React from "react";
import {Button, Modal} from "react-bootstrap";
import {withRouter} from "react-router";

@withRouter
export default class ModalView extends React.Component {
  state = {
    show: true
  };

  handleHide = () => {
    this.setState({show: false});
  };

  handleExited = () => {
    this.props.history.goBack();
  };

  render() {
    return (
      <Modal
        show={this.state.show}
        onHide={this.handleHide}
        onExited={this.handleExited}
        className="modal-right"
      >
        <Modal.Body className="page-content">
          {this.props.children}
        </Modal.Body>
      </Modal>
    );
  }
}
