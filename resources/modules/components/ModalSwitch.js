import React from 'react';
import {Switch} from 'react-router';

/**
 * @link https://reacttraining.com/react-router/web/example/modal-gallery
 */
export default class ModalSwitch extends React.Component {
  static defaultProps = {
    location: null,
    modalRoute: null,
  };

  previousLocation = this.props.location;

  componentWillUpdate(nextProps) {
    let {location} = this.props;

    // set previousLocation if props.location is not modal
    if (
      nextProps.history.action !== 'POP' &&
      (!location.state || !location.state.modal)
    ) {
      this.previousLocation = this.props.location;
    }
  }

  isModal() {
    let {location} = this.props;
    return location.state &&
      location.state.modal &&
      this.previousLocation !== location; // not initial render
  }

  render() {
    const isModal = this.isModal();


    return (
      <>
        <Switch location={isModal ? this.previousLocation : location}>
          {this.props.children}
        </Switch>
        {isModal ? this.props.modalRoute : null}
      </>
    );
  }
}
