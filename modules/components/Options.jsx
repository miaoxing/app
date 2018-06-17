import React from 'react';
import PropTypes from 'prop-types';

class Options extends React.Component {
  render () {
    const options = [];

    if (this.props.placeholder) {
      options.push(<option key="" value="">{this.props.placeholder}</option>)
    }

    $.map(this.props.data, (option, key) => {
      if (typeof option === 'object') {
        options.push(<option key={option[this.props.valueKey]}
          value={option[this.props.valueKey]}>{option[this.props.labelKey]}</option>)
      } else {
        options.push(<option key={key} value={key}>{option}</option>)
      }
    });

    return options;
  }
}

Options.defaultProps = {
  labelKey: 'label',
  valueKey: 'value',
  placeholder: '请选择'
};

Options.propTypes = {
  data: PropTypes.oneOfType([
    PropTypes.array,
    PropTypes.object,
  ]),
  labelKey: PropTypes.string,
  valueKey: PropTypes.string,
  placeholder: PropTypes.string
};

export default Options
