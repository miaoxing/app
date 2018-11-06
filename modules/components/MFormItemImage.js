import React from 'react';
import ReactDOM from 'react-dom';
import 'plugins/wechat-image/css/wechat-image.css';

class MFormItemImage extends React.Component {
  componentWillMount() {
    // 进入页面要刷新接口才能上传
    requirejs(['plugins/wechat/js/wx'], function (wx) {
      wx.reset();
    });
  }

  componentDidMount() {
    const dom = ReactDOM.findDOMNode(this);

    requirejs([
      'plugins/wechat-image/js/wechat-image',
      'plugins/wechat/js/wx',
      'comps/artTemplate/template.min'
    ], (image, wx, template) => {
      $('.js-upload-container', dom).html(template.render('wx-upload-image-tpl', {
        title: '图片'
      }));

      const img = new image.constructor;
      img.init({
        $container: $('.js-upload-container .js-wx-upload-image', dom),
        images: [],
        wx: wx,
        max: 10,
        uploadUrl: $.url('wechat-image/get-wechat-image'),
        chooseImageOptions: {
          sizeType: ['original'],
        }
      });
    });
  }

  render() {
    return <div>
      <div className="form-group js-upload-container"/>
      <style>
        {`
        .wx-upload-image-cells {
          margin-left: -47px;
        }
        `}
      </style>
      <script type="text/html" id="wx-upload-image-tpl">
        {`
            <div class="wx-upload-image js-wx-upload-image">
              <div class="wx-upload-image-header">
                <span><%== title ? title : '图片上传' %></span>
              </div>

              <div class="wx-upload-image-body js-upload">
                <ul class="wx-upload-image-cells js-upload-cells">
                  <li class="wx-upload-image-add">
                    <% if(hasOption) { %>
                    <select class="js-upload-image-option img-select">
                      <% for(var i in options) {%>
                      <option value="<%= options[i].value %>"><%= options[i].key %></option>
                      <% } %>
                    </select>
                    <% } %>
                    <div class="wx-upload-image-select-wrp js-select">
                      <div class="wx-upload-image-select"></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            `}
      </script>
    </div>
  }
}

export default MFormItemImage;
