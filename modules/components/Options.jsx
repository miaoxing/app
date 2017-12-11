import React from 'react';
import PropTypes from 'prop-types';

class Options extends React.Component {
  render () {
    const options = [];

    if (this.props.placeholder) {
      options.push(<option key="" value="">{this.props.placeholder}</option>)
    }

    this.props.data.forEach((option) =>
      options.push(<option key={option[this.props.valueKey]}
        value={option[this.props.valueKey]}>{option[this.props.labelKey]}</option>)
    );

    return options;
  }
}

Options.defaultProps = {
  labelKey: 'label',
  valueKey: 'value',
  placeholder: '请选择'
};

Options.propTypes = {
  data: PropTypes.array,
  labelKey: PropTypes.string,
  valueKey: PropTypes.string,
  placeholder: PropTypes.string
};

export default Options
