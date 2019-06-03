import React from "react";
import {Button, Modal} from "react-bootstrap";
import {withRouter} from "react-router";
import ModalEvent from "components/ModalEvent";

@withRouter
export default class ModalView extends React.Component {
  state = {
    show: true
  };

  handleHide = () => {
    // 如果还在modal中。
    this.props.history.goBack();
    //this.setState({show: false});
  };

  handleExited = () => {
    this.props.history.goBack();
  };

  render() {
    return (
      <>
        <ModalEvent onExit={() => {console.log('exit')}} onEnter={() => {console.log('enter')}}/>
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
      </>
    );lfys-hospital-doctor-screeningslfys-hospital-doctor-screenings
  }
}
