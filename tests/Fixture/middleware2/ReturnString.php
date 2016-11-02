<?php

namespace MiaoxingTest\App\Middleware;

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
