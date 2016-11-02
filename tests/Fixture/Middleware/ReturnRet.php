<?php

namespace MiaoxingTest\App\Fixture\Middleware;

use Wei\RetTrait;

class ReturnRet extends \Miaoxing\Plugin\Middleware\Base
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
