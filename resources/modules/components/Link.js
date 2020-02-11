import React from "react";
import {Link as RouterLink} from "react-router-dom";
import {ModalContext} from '@miaoxing/router-modal';
import {createLocation} from 'history';

export default function Link({to, modal, autoModal, ...props}) {
  const location = createLocation(to, {modal});

  if (!autoModal) {
    return <RouterLink to={location} {...props}/>
  }

  // 分开减少层级和逻辑
  return <ModalContext.Consumer>
    {({isModal}) => {
      location.state.modal = modal || (isModal && autoModal);
      return <RouterLink to={location} {...props}/>
    }}
  </ModalContext.Consumer>
}
