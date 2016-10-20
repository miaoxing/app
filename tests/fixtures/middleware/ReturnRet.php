<?php

namespace miaoxing\app\tests\fixtures\middleware;

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
