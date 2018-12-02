import React from 'react';
import InfiniteScroll from 'react-infinite-scroller';
import axios from 'axios';
import app from 'app';

export default class InfiniteList extends React.Component {
  static defaultProps = {
    url: '',
    emptyMessage: <div className="list-empty">暂无记录</div>,
    useWindow: true,
  };

  state = {
    data: [],
    hasMore: true,
    loading: false,
  };

  handleLoadMore(page) {
    this.setState({loading: true});

    axios(app.appendUrl(this.getUrl(), {page: page})).then(({data: ret}) => {
      if (ret.code !== 1) {
        return app.ret(ret);
      }

      let data = this.state.data.concat(ret.data);
      this.setState({
        data,
        hasMore: ret.page < (ret.records / ret.rows),
        loading: false,
      });
    });
  }

  getUrl() {
    if (this.props.url) {
      return this.props.url;
    }

    return location.pathname + '.json' + location.search;
  }

  render() {
    return <InfiniteScroll
      loadMore={this.handleLoadMore.bind(this)}
      hasMore={this.state.hasMore && !this.state.loading}
      useWindow={this.props.useWindow}
    >
      {this.props.render({
        data: this.state.data
      })}
      {this.state.loading && this.state.hasMore && <div className="text-center list-loading" key={0}>
        <span className="list-loading-spinner"/>努力加载中...
      </div>}
      {!this.state.hasMore && this.state.data.length === 0 && this.props.emptyMessage}
    </InfiniteScroll>;
  }
}