<?php

namespace MiaoxingTest\App\Fixture\Middleware;

class ReturnResponse extends \Miaoxing\Services\Middleware\BaseMiddleware
{
    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        return $this->response->setContent('returnResponseInMiddleware');
    }
}
