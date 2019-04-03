import React from "react";
import PropTypes from 'prop-types';
import classNames from 'classnames';

const List = (props) => {
  const {
    as: Component,
    className,
    indented,
    condensed,
    borderless,
    ...rest
  } = props;

  return (
    <Component
      {...rest}
      className={classNames(
        className,
        'list',
        indented && 'list-indented',
        condensed && 'list-condensed',
        borderless && 'list-border-less',
      )}
    />
  );
};

List.propTypes = {
  /**
   * 缩进列表
   */
  indented: PropTypes.bool,

  /**
   * 紧凑列表
   */
  condensed: PropTypes.bool,

  /**
   * 无边框列表
   */
  borderless: PropTypes.bool,
};

List.defaultProps = {
  as: 'ul',
};

export default List;
