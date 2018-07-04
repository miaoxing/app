<?php

$view->layout();
$wei->page->addPluginAssets($app->isAdmin() ? 'admin2' : 'app');
