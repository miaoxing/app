import React from 'react';
import {Link} from 'react-router-dom';
import map from 'lodash/map';
import classNames from 'classnames';
import {Nav} from "react-bootstrap";

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

    return <Nav className={classNames('header-tab tab-underline border-top-bottom', this.props.className)}>
      {map(this.props.data, (item) => {
        return <Nav.Item key={item.key}>
          <Nav.Link
            as={Link}
            to={$.appendUrl(baseUrl, item.key === 'all' ? {} : {[this.props.paramName]: item.key})}
            active={cur === item.key}
            className="text-active-primary border-active-primary"
          >
            {item.name}
          </Nav.Link>
        </Nav.Item>;
      })}
    </Nav>;
  }
}

TabNavs.defaultProps = {
  all: false,
  data: [],
  paramName: 'status'
};

export default TabNavs;
