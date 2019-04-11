import * as React from "react";
import ListItem from "./ListItem";
import ListTitle from "./ListTitle";
import ListDetail from "./ListDetail";

export interface ListDescProps {
  title?: string;
  children?: any;
}

const ListDesc = ({title, children, ...props}: ListDescProps) => {
  return <ListItem description={true} {...props}>
    <ListTitle>{title}</ListTitle>
    <ListDetail>{children || '-'}</ListDetail>
  </ListItem>;
};

export default ListDesc;
