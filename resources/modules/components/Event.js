import React from "react";
import propTypes from 'prop-types';
import event from 'event';

export default class extends React.Component {
  static propTypes = {
    name: propTypes.string,
  };

  state = {
    children: [],
    prepend: [],
    append: [],
  };

  componentDidMount() {
    event.trigger(this.props.name, {comp: this});
  }

  children(component) {
    return this.setState({children: this.state.children.concat(component)});
  }

  prepend(component) {
    return this.setState({prepend: this.state.prepend.concat(component)});
  }

  append(component) {
    return this.setState({append: this.state.append.concat(component)});
  }

  render() {
    return <>
      {this.state.prepend}
      {this.state.children.length ? this.state.children : (this.props.children || '')}
      {this.state.append}
    </>;
  }
}
