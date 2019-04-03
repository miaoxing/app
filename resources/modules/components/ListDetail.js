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
      {...props}
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
