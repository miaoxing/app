import React from 'react';
import {withTable} from "components/TableProvider";

class DeleteLink extends React.Component {
  constructor(props) {
    super(props);

    this.handleDelete = this.handleDelete.bind(this);
  }

  handleDelete(e) {
    e.preventDefault();

    $.confirm(this.props.message, (result) => {
      if (!result) {
        return;
      }

      $.ajax({
        url: this.props.href,
        loading: true,
        dataType: 'json'
      }).done(ret => {
        $.msg(ret);
        if (ret.code === 1) {
          this.props.table && this.props.table.reload();
        }
      });
    });
  }

  render() {
    const {message, href, table, ...rest} = this.props;
    return <a className="text-danger" href="#" onClick={this.handleDelete} {...rest}>
      删除
    </a>;
  }
}

DeleteLink.defaultProps = {
  message: '删除后将无法还原,确定删除?',
};

export default withTable(DeleteLink);
