import React from 'react';
import {findDOMNode} from 'react-dom';
import {InputGroup, FormControl, Button} from 'react-bootstrap';

$.fn.imageInput = function () {
  var editor = $.getUeditor();
  var $this = $(this);
  $this.next().click(function () {
    var dialog = editor.getDialog("insertimage");
    var callback = function (type, imgObjs) {
      var src;
      if (imgObjs.src) {
        src = imgObjs.src;
      } else {
        src = imgObjs[0].src
      }
      $this.val(src);
      editor.removeListener("beforeInsertImage", callback);
      return false;
    };
    dialog.open();
    editor.addListener("beforeInsertImage", callback)
  })
};

class ImageInput extends React.Component {
  componentDidMount () {
    import('ueditor-mx').then(() => $(findDOMNode(this.control)).imageInput())
  }

  render () {
    return (
      <InputGroup>
        <FormControl type="text" ref={control => this.control = control} {...this.props} />
        <InputGroup.Button>
          <Button><i className="fa fa-picture-o"/>{' '}选择图片</Button>
        </InputGroup.Button>
      </InputGroup>
    )
  }
}

export default ImageInput
