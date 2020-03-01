<?php

namespace Miaoxing\App\Controller;

use Miaoxing\Plugin\BaseController;
use Miaoxing\App\Service\JsConfig as JsConfigService;

class JsConfig extends BaseController
{
    protected $controllerAuth = false;

    public function indexAction()
    {
        return $this->suc(JsConfigService::toArray());
    }
}
