import React from "react";
import classNames from "classnames";

const ListDetail = (props) => {
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
        'list-detail'
      )}
    />
  );
};

ListDetail.defaultProps = {
  as: 'div',
};

export default ListDetail;
