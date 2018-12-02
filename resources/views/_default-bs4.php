<?php

$view->layout();
$wei->page->addPluginAssets($app->isAdmin() ? 'admin-bs4' : 'app-bs4');
