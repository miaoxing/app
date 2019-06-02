import React from "react";
import {withRouter} from "react-router";

@withRouter
export default class ModalEvent extends React.Component {
  static defaultProps = {
    onEnter: null,
    onExit: null,
  };

  isModal;

  componentDidMount() {
    this.unlisten = this.props.history.listen((location, action) => {
      if (this.isModal && !location.state.modal) {
        this.handleEvent('onExit', location, action);
      }

      if (!this.isModal && location.state.modal) {
        this.handleEvent('onEnter', location, action);
      }

      if (location.state.modal) {
        this.isModal = true;
      } else {
        this.isModal = false;
      }
    });
  }

  componentWillUnmount() {
    this.unlisten();
  }

  handleEvent(event, location, action) {
    if (this.props[event]) {
      this.props[event](location, action);
    }
  }

  render() {
    return this.props.children || '';
  }
}
