<?php

namespace Miaoxing\App\Controller;

use Miaoxing\Plugin\BaseController;

class JsConfig extends BaseController
{
    protected $controllerAuth = false;

    public function indexAction()
    {
        return $this->suc(wei()->jsConfig->toArray());
    }
}
