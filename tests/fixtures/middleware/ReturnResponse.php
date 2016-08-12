<?php

namespace miaoxing\app\tests\fixtures\middleware;

class ReturnResponse extends \miaoxing\plugin\middleware\Base
{
    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        return $this->response->setContent('returnResponseInMiddleware');
    }
}
