<?php

$view->layout();
$app->isAdmin() && require_once $this->getFile('@user/admin/user/richInfo.php');
