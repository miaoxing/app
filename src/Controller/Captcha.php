<?php

namespace Miaoxing\App\Controller;

use Miaoxing\Plugin\BaseController;

class Captcha extends BaseController
{
    protected $guestPages = [
        'captcha',
    ];

    public function indexAction()
    {
        $this->response->setHeader('Content-type', 'image/png');

        return wei()->captcha->render();
    }

    public function checkAction($req)
    {
        return wei()->captcha->check($req['captcha']);
    }
}
