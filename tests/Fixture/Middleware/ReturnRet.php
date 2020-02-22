<?php

namespace MiaoxingTest\App\Fixture\Middleware;

use Wei\RetTrait;

class ReturnRet extends \Miaoxing\Services\Middleware\BaseMiddleware
{
    use RetTrait;

    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        return $this->suc('returnRetInMiddleware');
    }
}
