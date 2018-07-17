<?php

$view->layout();
?>

<div class="row">
  <div class="col-xs-12">
    <form action="<?= $url('admin/app-settings/update') ?>" class="js-setting-form form-horizontal" method="post"
      role="form">
      <div class="form-group">
        <label class="col-lg-2 control-label" for="brand-primary">
          主题颜色
        </label>

        <div class="col-lg-4">
          <input class="js-brand-primary form-control" id="brand-primary" name="settings[theme.brandPrimary]"
            value="<?= $e($setting('theme.brandPrimary')) ?>">
        </div>

        <label class="col-lg-4 help-text" for="brand-primary">
          更改后会改变链接,主要文本(如价格),按钮(如保存,提交)等的颜色
        </label>
      </div>

      <div class="clearfix form-actions form-group">
        <div class="col-lg-offset-2">
          <button class="btn btn-primary" type="submit">
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

<?= $block->js() ?>
<script>
  require(['plugins/app/js/admin/app-settings'], function (appSettings) {
    appSettings.indexAction();
  });
</script>
<?= $block->end() ?>
