import React from 'react';
import {Link} from 'react-router-dom';
import _ from 'lodash';
import classNames from 'classnames';

class TabNavs extends React.Component {
  render() {
    const item = _.find(this.props.data, ['key', $.req(this.props.paramName)]);
    const cur = item ? item.key : 'all';
    const baseUrl = this.props.baseUrl || window.location.pathname;

    return <ul className={classNames('header-tab nav tab-underline border-top-bottom', this.props.className)}>
      {_.map(this.props.data, (item) => {
        return <li key={item.id} className={'border-primary ' + (cur === item.key ? 'active' : '')}>
          <Link to={$.appendUrl(baseUrl, {[this.props.paramName]: item.key})}
            className="text-active-primary">{item.name}</Link>
        </li>;
      })}
    </ul>;
  }
}

TabNavs.defaultProps = {
  data: [],
  paramName: 'status'
};

export default TabNavs;
