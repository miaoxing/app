<?php

namespace miaoxing\app\tests\fixtures\middleware;

use Wei\RetTrait;

class ReturnRet extends \miaoxing\plugin\middleware\Base
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
