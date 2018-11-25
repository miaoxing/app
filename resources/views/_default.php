<?php

$view->layout();
$wei->page->addPluginAssets($app->isAdmin() ? 'admin' : 'app');
$app->isAdmin() && require_once $this->getFile('@user/admin/user/richInfo.php');
