<?php

namespace MiaoxingTest\App\Fixture\Middleware;

class ReturnString extends \Miaoxing\Services\Middleware\BaseMiddleware
{
    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        return 'returnStringInMiddleware';
    }
}
