import React from "react";
import {Link} from "react-router-dom";
import _ from 'lodash';

class TabNavs extends React.Component {
  render() {
    const item = _.find(this.props.data, ['key', $.req(this.props.paramName)]);
    const cur = item ? item.key : 'all';

    return <ul className="header-tab nav tab-underline border-top-bottom">
      {_.map(this.props.data, (item) => {
        return <li key={item.id} className={'border-primary ' + (cur === item.key ? 'active' : '')}>
          <Link to={$.appendUrl(this.props.baseUrl, {[this.props.paramName]: item.key})}
            className="text-active-primary">{item.name}</Link>
        </li>
      })}
    </ul>
  }
}

TabNavs.defaultProps = {
  data: [],
  paramName: 'status',
  baseUrl: window.location.pathname,
};

export default TabNavs;
