<?php

namespace Miaoxing\App\Controller\Api;

use Miaoxing\App\Service\JsConfig;
use Miaoxing\Plugin\BaseController;

class JsConfigController extends BaseController
{
    protected $controllerAuth = false;

    public function indexAction()
    {
        return $this->suc(JsConfig::toArray());
    }
}
