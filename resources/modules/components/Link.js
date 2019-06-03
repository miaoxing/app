import React from "react";
import {Link as RouterLink} from "react-router-dom";
import {ModalContext} from 'components/ModalSwitch';

export default function Link({to, modal, autoModal, ...props}) {
  if (!autoModal) {
    return <RouterLink
      to={{
        pathname: to,
        state: {modal},
      }}
      {...props}
    />
  }

  // 分开减少层级和逻辑
  return <ModalContext.Consumer>
    {({isModal}) => {
      return <RouterLink
        to={{
          pathname: to,
          state: {modal: modal || (isModal && autoModal)}
        }}
        {...props}
      />
    }}
  </ModalContext.Consumer>
}
