import axios from 'node_modules/axios';
import app from 'app';
import message from 'comps/react-bootstrap-message/js/react-bootstrap-message';
import React from "react";

let count = 0;
let loading;

function showLoading() {
  count++;
  if (count === 1) {
    loading = app.loading();
  }
};

function hideLoading() {
  count--;
  if (count === 0) {
    loading();
  }
};

axios.interceptors.request.use(config => {
  config.loading && showLoading();
  return config;
});

axios.interceptors.response.use(response => {
  hideLoading();
  return response;
});

export default axios;
