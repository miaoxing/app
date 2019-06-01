import React from "react";
import {Link} from "react-router-dom";

export default function ModalLink({to, ...props}) {
  return <Link
    to={{
      pathname: to,
      state: {modal: true}
    }}
    {...props}
  />
}
