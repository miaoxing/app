import React from 'react';
import {findDOMNode} from 'react-dom';
import rp from 'require-promise';

class ImageUpload extends React.Component {
  componentDidMount() {
    rp('plugins/admin/js/image-input').then(() => {
      $(findDOMNode(this.control)).imageUploadInput();
    })
  }

  render() {
    return (
      <div className="js-upload-container">
        <input type="file" className="js-image-upload" ref={control => this.control = control}/>
        <input type="hidden" className="js-image-url" {...this.props}/>
      </div>
    )
  }
}

export default ImageUpload
