import React from 'react';

class FooterBar extends React.Component {
  render() {
    return <div className="footer-bar footer-bar-fluid flex">
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
  height: 54 // 44 + 10
};

export default FooterBar;
