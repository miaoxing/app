<?php

namespace miaoxing\app\tests\fixtures\middleware;

class ReturnString extends \miaoxing\plugin\middleware\Base
{
    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        return 'returnStringInMiddleware';
    }
}
