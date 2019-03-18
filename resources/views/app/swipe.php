<?php

if (!$images) {
    return;
}
$wei->page->addAsset('plugins/app/css/swipe.css');
?>

<div class="js-image-slider swipe">
  <div class="js-images-preview images-preview swipe-wrap">
    <?php foreach ($images as $index => $image) : ?>
      <div>
        <img src="<?= wei()->asset->thumb($image, 750) ?>"/>
      </div>
    <?php endforeach ?>
  </div>
  <ol class="swipe-nav">
    <?php foreach ($images as $index => $image) : ?>
      <li><a class="<?= $index == 0 ? 'swipe-nav-active' : '' ?>"></a></li>
    <?php endforeach ?>
  </ol>
</div>

<?= $block->js() ?>
<script>
require(['comps/Swipe/swipe'], function () {
  $('.js-image-slider')
    .Swipe({
      auto: 3000,
      callback: function (index, elem) {
        var nav = $(elem).parent().next().find('a');
        nav.removeClass('swipe-nav-active').eq(index).addClass('swipe-nav-active');
      }
    })
    .fixSwipeImgHeight();
});
</script>
<?= $block->end() ?>
