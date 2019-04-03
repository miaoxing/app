import React from "react";
import classNames from "classnames";
import propTypes from 'prop-types';
import ListTitle from "components/ListTitle";
import ListText from "components/ListText";
import ListDetail from "components/ListDetail";

const ListItem = (props) => {
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
