import React from 'react';
import BtnLink from 'components/BtnLink';

export default (props) => <BtnLink to={props.href} bsStyle="success">{props.children || '添加'}</BtnLink>;
