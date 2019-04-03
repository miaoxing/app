import React from "react";
import PropTypes from 'prop-types';
import classNames from 'classnames';

export default class List extends React.Component {
  static propTypes = {
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

  static defaultProps = {
    as: 'ul',
  };

  render() {
    const {
      as: Component,
      className,
      indented,
      condensed,
      borderless,
      ...props
    } = this.props;

    return (
      <Component
        {...props}
        className={classNames(
          className,
          'list',
          indented && 'list-indented',
          condensed && 'list-condensed',
          borderless && 'list-border-less',
        )}
      />
    );
  }
}
