import React, {Fragment} from 'react';

const Actions = ({children}) => {
  const actions = [];
  React.Children.map(children, (child) => {
    actions.push(child, ' ');
  });
  return actions;
};

export default Actions;
