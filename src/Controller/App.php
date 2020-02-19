<?php

namespace Miaoxing\App\Controller;

use Miaoxing\Plugin\BaseController;

class App extends BaseController
{
    protected $guestPages = [
        'app'
    ];

    public function indexAction()
    {
        return [];
    }
}
