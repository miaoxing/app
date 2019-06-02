import React from "react";
import {Link as RouterLink} from "react-router-dom";

export default function Link({to, modal, ...props}) {
  return <RouterLink
    to={{
      pathname: to,
      state: {modal}
    }}
    {...props}
  />
}
