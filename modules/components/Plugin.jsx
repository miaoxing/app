import React from "react";

export default class Plugin extends React.Component {
  constructor(props, context) {
    super(props, context);

    this.state = {
      el: ''
    }
  }

  componentDidMount() {
    $(document).trigger(this.props.name, [this]);
  }

  render() {
    return this.state.el;
  }
}
