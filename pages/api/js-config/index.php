<?php

use Miaoxing\App\Service\JsConfig;
use Miaoxing\Plugin\BasePage;

return new class () extends BasePage {
    protected $controllerAuth = false;

    public function get()
    {
        return suc(['data' => JsConfig::toArray()]);
    }
};
