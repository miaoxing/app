import React from 'react';

class FooterBar extends React.Component {
  render() {
    return <div className="footer-bar footer-bar-fluid d-flex">
      <style>
        {`
        body {
            margin-bottom: ${this.props.height}px;
        }
        `}
      </style>
      {this.props.children}
    </div>;
  }
}

FooterBar.defaultProps = {
  height: 58 // 48 + 10
};

export default FooterBar;
