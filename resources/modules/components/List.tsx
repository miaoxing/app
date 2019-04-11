import * as React from "react";
import classNames from 'classnames';

export interface ListProps {
  as?: any;
  className?: string;

  /**
   * 缩进列表
   */
  indented?: boolean;

  /**
   * 紧凑列表
   */
  condensed?: boolean;

  /**
   * 无边框列表
   */
  borderless?: boolean;
}

const List = (props: ListProps) => {
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

List.defaultProps = {
  as: 'ul',
};

List.Indented = (props: ListProps) => (<List indented={true} {...props}/>);

export default List;
export const ListIndented = List.Indented;
