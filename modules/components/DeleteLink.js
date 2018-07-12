import React from 'react';

class DeleteLink extends React.Component {
  constructor(props) {
    super(props);

    this.handleDelete = this.handleDelete.bind(this);
  }

  handleDelete(e) {
    const message = this.props.message || '删除后将无法还原,确认删除?';
    const href = this.props.href;
    $.confirm(message, () => {
      $.ajax({
        url: href,
        loading: true,
        dataType: 'json',
      }).done(ret => {
        $.msg(ret);
        if (ret.code === 1) {
          $(document).trigger('tableReload');
        }
      });
    });
  }

  render() {
    return <a className="text-danger" href="javascript:" onClick={this.handleDelete}>
      删除
    </a>
  }
}

export default DeleteLink;
