import React from 'react';
import BtnLink from 'components/BtnLink';

export default (props) => <BtnLink to={props.href} variant="secondary">{props.children || '返回列表'}</BtnLink>;
