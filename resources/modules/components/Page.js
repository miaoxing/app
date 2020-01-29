import React from 'react';
import {Breadcrumb} from "react-bootstrap";
import axios from 'axios';
import app from 'app';
import lcfirst from 'lcfirst';
import { LinkContainer } from 'react-router-bootstrap';

class Page extends React.Component {
  static defaultProps = {
    breadcrumb: null,
  };

  state = {
    breadcrumb: [],
  };

  componentDidMount() {
    axios.get(app.url('admin-api/admin-page/breadcrumb', {ctrl: app.namespace + '/' + app.controller, act: lcfirst(app.action)}))
      .then(({data}) => {
        if (data.code !== 1) {
          // 忽略错误未找到的情况
          return;
        }
        this.setState({breadcrumb: data.data});
      });
  }

  render() {
    return (
      <>
        <Breadcrumb className="mt-n4 mx-n4 mb-4" listProps={{className: 'breadcrumb-light py-3 pl-4'}}>
          {this.state.breadcrumb.map((breadcrumb, index) => (
            <LinkContainer key={breadcrumb.name} to={breadcrumb.url}>
              <Breadcrumb.Item active={this.state.breadcrumb.length === index + 1}>
                {breadcrumb.name}
              </Breadcrumb.Item>
            </LinkContainer>
          ))}
          {this.state.breadcrumb.length === 0 && <Breadcrumb.Item className="invisible">#</Breadcrumb.Item>}
        </Breadcrumb>
        <div className="p-4 bg-white">
          {this.props.children}
        </div>
      </>
    );
  }
}

export default Page
