<?php

namespace miaoxing\app\controllers;

class Logs extends \miaoxing\plugin\BaseController
{
    protected $guestPages = [
        'logs'
    ];

    public function createAction($req)
    {
        if ($req['message']) {
            wei()->jsRaven->captureMessage($req['message']);
        }
        return $this->suc('ok');
    }
}
