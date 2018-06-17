import React from "react";

export default class TabNavs extends React.Component {
  render() {
    return <ul className="nav tab-underline m-b">
      {$.map(this.props.data, (item, key) => {
        return <li key={item.id} className={this.props.activeId === item.id ? 'active' : ''}>
          <a href={$.appendUrl(this.props.baseUrl, {[this.props.paramName]: item.key})}>{item.name}</a>
        </li>
      })}
    </ul>
  }
}
