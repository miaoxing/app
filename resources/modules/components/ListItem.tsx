import * as React from "react";
import classNames from "classnames";
import ListTitle from "./ListTitle";
import ListText from "./ListText";
import ListDetail from "./ListDetail";

export interface ListItemProps {
  as?: any;
  className?: string;
  title?: string;
  detail?: string;
  text?: string;
  /**
   * 是否为描述列表项目
   */
  description?: boolean;
  children?: any;
}

const ListItem = (props: ListItemProps) => {
  const {
    as: Component,
    className,
    title,
    detail,
    text,
    children,
    description,
    ...rest
  } = props;

  if (detail && text) {
    throw new Error('detail 和 text 只能同时使用一个');
  }

  return (
    <Component
      {...rest}
      className={classNames(
        className,
        'list-item',
        description && 'list-description',
      )}
    >
      {children || (
        <>
          {title && <ListTitle>{title}</ListTitle>}
          {detail && <ListDetail>{detail}</ListDetail>}
          {text && <ListText>{text}</ListText>}
        </>
      )}
    </Component>
  );
};

ListItem.defaultProps = {
  as: 'li'
};

export default ListItem;
