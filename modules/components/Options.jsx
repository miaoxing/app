import React from 'react';

class Options extends React.Component {
  render () {
    const options = [];
    if (this.props.default) {
      options.push(<option key="">{this.props.default}</option>)
    }

    this.props.data.forEach((option) =>
      options.push(<option key={option[this.props.value]}
        value={option[this.props.value]}>{option[this.props.label]}</option>)
    );

    return options;
  }
}

export default Options
