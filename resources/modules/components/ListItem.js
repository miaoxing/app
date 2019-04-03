import React from "react";
import classNames from "classnames";

export default class extends React.Component {
  static defaultProps = {
    as: 'li',
  };

  render() {
    const {
      as: Component,
      className,
      ...props
    } = this.props;

    return (
      <Component
        {...props}
        className={classNames(
          className,
          'list-item'
        )}
      />
    );
  }
}
