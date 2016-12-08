<?php

namespace Miaoxing\App\Controller;

class Captcha extends \Wei\BaseController
{
    public function indexAction()
    {
        $this->response->setHeader('Content-type', 'image/png');

        return wei()->captcha->render();
    }
}
