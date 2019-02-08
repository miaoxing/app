import React from "react";
import ReactDOM from 'react-dom';
import {createGlobalStyle} from 'styled-components';

const primary = wei.theme.primary;
const GlobalStyle = createGlobalStyle`
  a, a:hover {
    color: ${primary};
  }
  .text-primary,
  .active.text-active-primary,
  .open > .text-active-primary,
  .active > .text-active-primary {
    color: ${primary} !important;
  }
  .bg-primary {
    background-color: ${primary};
  }
  .btn-primary,
  .btn-primary:hover,
  .btn-primary:active,
  .btn-primary:focus,
  .btn-primary.disabled,
  .btn-primary[disabled] {
    background-color: ${primary};
    border-color: ${primary};
  }
  @media screen and (-webkit-min-device-pixel-ratio: 2) {
    .btn-primary.hairline::before {
      border-color: ${primary};
    }
  }
  .border-primary,
  .active.border-active-primary {
    border-color: ${primary} !important;
  }
  .active.after-active-primary::after,
  .after-primary::after {
    color: ${primary};
    border-color: ${primary};
  }
`;

const div = document.createElement('div');
document.body.append(div);
ReactDOM.render(<GlobalStyle/>, div);
