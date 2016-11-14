<?php $view->layout() ?>

<div class="page-header">
  <h1>
    网站设置
  </h1>
</div>

<div class="row">
  <div class="col-xs-12">
    <form action="<?= $url('admin/app-settings/update') ?>" class="js-setting-form form-horizontal" method="post" role="form">
      <div class="form-group">
        <label class="col-lg-2 control-label" for="brandPrimary">
          主题颜色
        </label>

        <div class="col-lg-4">
          <input class="js-brand-primary form-control" id="brandPrimary" name="settings[theme.brandPrimary]" rows="6" value="<?= $e($setting('theme.brandPrimary')) ?>">
        </div>

        <label class="col-lg-4 help-text" for="customCss">
          更改后会改变链接,主要文本(如价格),按钮(如保存,提交)等的颜色
        </label>
      </div>

      <div class="form-group">
        <label class="col-lg-2 control-label" for="customCss">
          自定CSS
        </label>

        <div class="col-lg-4">
          <textarea class="js-custom-css form-control" id="customCss" name="settings[site.customCss]" rows="6"><?= $e($setting('site.customCss')) ?></textarea>
        </div>

        <label class="col-lg-4 help-text" for="customCss">
          为避免页面布局错误,请在开发人员的指导下填写
        </label>
      </div>

      <div class="clearfix form-actions form-group">
        <div class="col-lg-offset-2">
          <button class="btn btn-info" type="submit">
            <i class="fa fa-check bigger-110"></i>
            提交
          </button>
        </div>
      </div>
    </form>
  </div>
  <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
<!-- /.row -->

<?= $block('js') ?>
<script>
  require(['assets/spectrum'], function () {
    $('.js-brand-primary').spectrum();
  });

  require(['form', 'validator'], function () {
    $('.js-setting-form')
      .ajaxForm({
        dataType: 'json',
        beforeSubmit: function(arr, $form, options) {
          return $form.valid();
        }
      })
      .validate();
  });
</script>
<?= $block->end() ?>