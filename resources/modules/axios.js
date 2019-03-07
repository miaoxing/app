import axios from 'node_modules/axios';
import app from 'app';
import message from 'react-bootstrap-message/js/react-bootstrap-message';
import React from "react";

function showError(error) {
  app.err('很抱歉，请求出错，请稍后再试');
  // TODO log
}

axios.interceptors.request.use(config => {
  config.loading && message.loading('show');
  return config;
});

axios.interceptors.response.use(response => {
  message.loading('hide');
  return response;
}, error => {
  message.loading('hide');
  showError(error);
  return Promise.reject(error)
});

export default axios;
