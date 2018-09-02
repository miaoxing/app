import React from "react";
import InfiniteScroll from 'react-infinite-scroller';

class InfiniteList extends React.Component {
  state = {
    data: [],
    hasMore: true,
  };

  handleLoadMore(page) {
    $.ajax({
      url: $.appendUrl(this.props.url, {page: page}),
    }).done(ret => {
      if (ret.code !== 1) {
        return $.msg(ret);
      }

      let data = this.state.data.concat(ret.data);
      this.setState({
        data: data,
        hasMore: ret.page <= Math.ceil(ret.records / ret.rows),
      });
    });
  }

  render() {
    return <InfiniteScroll
      loadMore={this.handleLoadMore.bind(this)}
      hasMore={this.state.hasMore}
      loader={<div className="list-loading" key={0}>
        <span className="list-loading-spinner"/>努力加载中...
      </div>}
    >
      {this.props.render({
        data: this.state.data
      })}
    </InfiniteScroll>
  }
}

InfiniteList.defaultProps = {
  url: '',
};

export default InfiniteList;
