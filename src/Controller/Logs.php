<?php

namespace Miaoxing\App\Controller;

class Logs extends \Miaoxing\Plugin\BaseController
{
    protected $guestPages = [
        'logs',
    ];

    public function createAction($req)
    {
        if ($req['message']) {
            wei()->jsRaven->captureMessage($req['message'], $req['params']);
        }

        return $this->suc('ok');
    }
}
