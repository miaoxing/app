<?php

namespace miaoxing\app\tests\fixtures\middleware;

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
