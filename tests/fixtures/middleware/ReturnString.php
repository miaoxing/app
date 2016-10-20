<?php

namespace miaoxing\app\tests\fixtures\middleware;

class ReturnString extends \Miaoxing\Plugin\Middleware\Base
{
    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        return 'returnStringInMiddleware';
    }
}
