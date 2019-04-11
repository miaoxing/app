import React from 'react';
import ListItem from "components/ListItem";
import ListTitle from "components/ListTitle";
import ListDetail from "components/ListDetail";

const ListDesc = ({title, children, ...props}) => {
  return <ListItem description={true} {...props}>
    <ListTitle>{title}</ListTitle>
    <ListDetail>{children || '-'}</ListDetail>
  </ListItem>;
};

export default ListDesc;
