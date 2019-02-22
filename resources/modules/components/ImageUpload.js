import React from 'react';
import {findDOMNode} from 'react-dom';
import rp from 'require-promise';

class ImageUpload extends React.Component {
  componentDidMount() {
    rp('plugins/admin/js/image-upload').then(() => {
      $(findDOMNode(this.control)).imageUpload();
    })
  }

  render() {
    return (
      <input type="text" {...this.props} ref={control => this.control = control}/>
    )
  }
}

export default ImageUpload
