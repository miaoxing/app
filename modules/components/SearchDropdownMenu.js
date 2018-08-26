import React from "react";
import DropdownMenu from "components/DropdownMenu";
import {withRouter} from "react-router-dom";

class SearchDropdownMenu extends React.Component {
  componentDidMount() {
    $('.js-form').loadQuery();
  }

  handleClick(e) {
    const location = this.props.history.location;
    const url = $.appendUrl(location.pathname + location.search, $('.js-form').serialize());
    this.props.history.push(url);
  }

  render() {
    return <DropdownMenu>
      <form className="js-form form form-inset m-t-md">
        <div className="form-body">
          {this.props.children}
        </div>
        <div className="form-group form-footer">
          <button type="button" className="btn btn-brand btn-primary btn-block"
            onClick={this.handleClick.bind(this)}>搜索
          </button>
        </div>
      </form>
    </DropdownMenu>
  }
}

export default withRouter(SearchDropdownMenu);
