<?php

use Miaoxing\Plugin\BasePage;

return new class () extends BasePage {
    public $controllerAuth = false;

    public function get()
    {
        return [];
    }
};
