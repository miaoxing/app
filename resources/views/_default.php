<?php

$view->layout();
if ($app->isAdmin()) {
  $wei->page->addAdminAsset();
} else {
  $wei->page->addAppAsset();
}
