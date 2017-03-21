<?php

namespace Miaoxing\App\Middleware;

use Miaoxing\Plugin\Middleware\Base;
use Miaoxing\Plugin\Service\AppRecord;
use Wei\RetTrait;

class CheckAppStatus extends Base
{
    use RetTrait;

    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        // 超级管理员下线也可以访问,以便进行功能调整
        if (wei()->curUser->isSuperAdmin()) {
            return $next();
        }

        $record = $this->app->getRecord();
        if (isset($record['status']) && $record['status'] != AppRecord::STATUS_ONLINE) {
            return $this->err('很抱歉,该应用已经' . $record->getConstantValue('status', $record['status'], 'text'));
        }

        return $next();
    }
}
