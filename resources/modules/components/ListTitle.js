import React from "react";
import classNames from "classnames";

const ListTitle = (props) => {
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
        'list-title'
      )}
    />
  );
};

ListTitle.defaultProps = {
  as: 'h5',
};

export default ListTitle;
