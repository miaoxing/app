import React from "react";
import classNames from "classnames";

const ListText = (props) => {
  const {
    as: Component,
    className,
    ...rest
  } = props;

  return (
    <Component
      {...props}
      className={classNames(
        className,
        'list-text'
      )}
    />
  );
};

ListText.defaultProps = {
  as: 'div',
};

export default ListText;
