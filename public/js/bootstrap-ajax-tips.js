/* TODO 待ajaxTips移除autoMsg?功能后,合并到ajaxTips */
(function (window, $) {
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
    .ajaxSuccess(function (event, jqXHR, ajaxOptions) {
      // 未登录,跳转到登录地址
      if (typeof jqXHR.responseJSON != 'undefined' && jqXHR.responseJSON.code == -401) {
        setTimeout(function () {
          window.location.href = jqXHR.responseJSON.redirect;
        }, 2000);
      }
    })
    .ajaxError(function (event, jqXHR, ajaxOptions) {
      // http://stackoverflow.com/questions/4807572/jquery-ajax-error-handling-to-ignore-aborted
      // If either of these are true, then it's not a true error and we don't care
      if (jqXHR.status === 0 || jqXHR.readyState === 0) {
        return;
      }
      $.err('很抱歉，请求出错，请稍后再试');
      $.log({
        url: window.location.href,
        type: ajaxOptions.type,
        data: ajaxOptions.data,
        status: jqXHR.status,
        response: jqXHR.responseText,
      });
    });
}(window, $));
