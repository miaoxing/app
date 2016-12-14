<?php $view->layout() ?>

<div class="page-header">
  <h1>
    系统设置
  </h1>
</div>

<div class="row">
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form action="<?= $url('admin/app/update') ?>" class="js-app-form form-horizontal" method="post" role="form">
      <div class="form-group">
        <label class="col-lg-2 control-label" for="domain">
          绑定域名
        </label>

        <div class="col-lg-4">
          <input type="text" class="form-control" id="domain" name="domain" value="<?= $e($appRecord['domain']) ?>">
        </div>

        <label class="col-lg-6 help-text" for="domain">
          请输入域名,如test.com,不以http开头
        </label>
      </div>

      <div class="clearfix form-actions form-group">
        <div class="col-lg-offset-2">
          <button class="btn btn-primary" type="submit">
            <i class="fa fa-check bigger-110"></i>
            保存
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
  require(['form'], function () {
    $('.js-app-form').ajaxForm({
      dataType: 'json'
    });
  });
</script>
<?= $block->end() ?>

