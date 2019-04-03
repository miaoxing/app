import React from "react";
import classNames from "classnames";
import propTypes from 'prop-types';

const ListItem = (props) => {
  const {
    as: Component,
    className,
    description,
    ...rest
  } = props;

  return (
    <Component
      {...rest}
      className={classNames(
        className,
        'list-item',
        description && 'list-description',
      )}
    />
  );
};

ListItem.propTypes = {
  /**
   * 是否为描述列表项目
   */
  description: propTypes.bool,
};

ListItem.defaultProps = {
  as: 'li'
};

export default ListItem;
