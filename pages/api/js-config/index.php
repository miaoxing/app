<?php

use Miaoxing\App\Service\JsConfig;
use Miaoxing\Plugin\BaseController;

return new class extends BaseController {
    protected $controllerAuth = false;

    public function get()
    {
        return suc(JsConfig::toArray());
    }
};
