import React from 'react';
import {Switch, withRouter} from 'react-router';
import ModalView from "components/ModalView";

/**
 * @link https://reacttraining.com/react-router/web/example/modal-gallery
 */
@withRouter
export default class ModalSwitch extends React.Component {
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
        {isModal && <ModalView>
          <Switch>
            {this.props.children}
          </Switch>
        </ModalView>}
      </>
    );
  }
}
