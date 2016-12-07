<?php

namespace Miaoxing\App\Controller;

class Captcha extends \Wei\BaseController
{
    public function indexAction()
    {
        return wei()->captcha->render();
    }
}
