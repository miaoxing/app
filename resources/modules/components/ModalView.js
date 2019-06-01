import React from "react";
import {Button, Modal} from "react-bootstrap";
import {withRouter} from "react-router";

export default withRouter(function ModalView(props) {
  let back = e => {
    e && e.stopPropagation();
    props.history.goBack();
  };

  return (
    <Modal show onHide={back}>
      <Modal.Header closeButton>
        <Modal.Title>Modal heading</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        {props.children}
      </Modal.Body>
      <Modal.Footer>
        <Button variant="primary" onClick={back}>Back</Button>
      </Modal.Footer>
    </Modal>
  );
})
