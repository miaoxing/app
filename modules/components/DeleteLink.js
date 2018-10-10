import React from 'react';

class DeleteLink extends React.Component {
  constructor(props) {
    super(props);

    this.handleDelete = this.handleDelete.bind(this);
  }

  handleDelete(e) {
    $.confirm(this.props.message, () => {
      $.ajax({
        url: this.props.href,
        loading: true,
        dataType: 'json'
      }).done(ret => {
        $.msg(ret);
        if (ret.code === 1) {
          this.props.tableRef.current.reload();
        }
      });
    });
  }

  render() {
    const {message, href, tableRef, ...rest} = this.props;
    return <a className="text-danger" onClick={this.handleDelete} {...rest}>
      删除
    </a>;
  }
}

DeleteLink.defaultProps = {
  message: '删除后将无法还原,确认删除?',
  tableRef: null,
};

export default DeleteLink;
