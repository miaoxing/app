import React from 'react';
import {Link} from 'react-router-dom';
import _ from 'lodash';
import classNames from 'classnames';

class TabNavs extends React.Component {
  render() {
    if (this.props.all) {
      this.props.data[0] = {
        key: 'all',
        name: '全部'
      };
    }

    const item = _.find(this.props.data, ['key', $.req(this.props.paramName)]);
    const cur = item ? item.key : 'all';
    const baseUrl = this.props.baseUrl || window.location.pathname;

    return <ul className={classNames('header-tab nav tab-underline border-top-bottom', this.props.className)}>
      {_.map(this.props.data, (item) => {
        return <li key={item.key} className={'border-primary ' + (cur === item.key ? 'active' : '')}>
          <Link to={$.appendUrl(baseUrl, item.key === 'all' ? {} : {[this.props.paramName]: item.key})}
            className="text-active-primary">{item.name}</Link>
        </li>;
      })}
    </ul>;
  }
}

TabNavs.defaultProps = {
  all: false,
  data: [],
  paramName: 'status'
};

export default TabNavs;
