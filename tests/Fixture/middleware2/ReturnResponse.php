<?php

namespace MiaoxingTest\App\Middleware;

class ReturnResponse extends \Miaoxing\Plugin\Middleware\Base
{
    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        return $this->response->setContent('returnResponseInMiddleware');
    }
}
