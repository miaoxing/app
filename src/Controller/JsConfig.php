<?php

namespace Miaoxing\App\Controller;

use Miaoxing\Plugin\BaseController;

class JsConfig extends BaseController
{
    public function indexAction()
    {
        return $this->suc(wei()->jsConfig->toArray());
    }
}
