import $ from 'jquery';

(function (window, $) {
  var unauthorizedCode = -401;
  var tipsDelay = 2000;

  $(document)
    .ajaxSend(function (event, jqXHR, ajaxOptions) {
      if (ajaxOptions.loading) {
        $.loading('show');
      }
    })
    .ajaxComplete(function (event, jqXHR, ajaxOptions) {
      if (ajaxOptions.loading) {
        $.loading('hide');
      }
    })
    .ajaxSuccess(function (event, jqXHR) {
      // 未登录,跳转到登录地址
      if (typeof jqXHR.responseJSON !== 'undefined' && jqXHR.responseJSON.code === unauthorizedCode) {
        setTimeout(function () {
          window.location.href = jqXHR.responseJSON.redirect;
        }, tipsDelay);
      }
    })
    .ajaxError(function (event, jqXHR, ajaxOptions) {
      // http://stackoverflow.com/questions/4807572/jquery-ajax-error-handling-to-ignore-aborted
      // If either of these are true, then it's not a true error and we don't care
      if (jqXHR.status === 0 || jqXHR.readyState === 0) {
        return;
      }

      $.err(jqXHR.status === 404 ? '很抱歉，您访问的页面不存在，请检查后再试' : '很抱歉，请求出错，请稍后再试');
      $.log({
        url: window.location.href,
        type: ajaxOptions.type,
        data: ajaxOptions.data,
        status: jqXHR.status,
        response: jqXHR.responseText
      });
    });
}(window, $));
