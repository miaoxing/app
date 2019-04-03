import React from "react";
import classNames from "classnames";

const ListItem = (props) => {
  const {
    as: Component,
    className,
    ...rest
  } = props;

  return (
    <Component
      {...rest}
      className={classNames(
        className,
        'list-item'
      )}
    />
  );
};

ListItem.defaultProps = {
  as: 'li'
};

export default ListItem;
