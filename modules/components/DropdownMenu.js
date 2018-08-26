import React from "react";
import 'comps/dropdown-menu/dropdown-menu.css';
import 'comps/dropdown-menu/dropdown-menu';

class DropdownMenu extends React.Component {
  componentDidMount() {
    $('[data-toggle="dropdown"]').dropdownmenu();
  }

  render() {
    return <div className="filter-dropdown nav-dropdown">
      <ul className="nav-tabs tabs-justified border-top-bottom">
        <li className="dropdown">
          <a className="text-active-primary" href="#" data-toggle="dropdown" data-target="#search">
            <span>搜索</span>&nbsp;&nbsp;
            <i className="icon small icon-chevron-down"/>
          </a>
        </li>
      </ul>
      {this.props.rightLink && <span className="center-right m-r">{this.props.rightLink}</span>}
      <div className="menu-content">
        <div id="search" className="dropdown-menu fade border-bottom">
          <div className="menu sub">
            {this.props.children}
          </div>
        </div>
      </div>
    </div>
  }
}

export default DropdownMenu;
