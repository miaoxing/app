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
  if (!loading) {
    return;
  }

  if (count > 0) {
    count--;
  }
  if (count === 0) {
    loading();
  }
};

function showError(error) {
  app.err('很抱歉，请求出错，请稍后再试');
  // TODO log
}

axios.interceptors.request.use(config => {
  config.loading && showLoading();
  return config;
});

axios.interceptors.response.use(response => {
  hideLoading();
  return response;
}, error => {
  hideLoading();
  showError(error);
  return Promise.reject(error)
});

export default axios;
