<?php

namespace Miaoxing\App\Middleware;

use Miaoxing\Plugin\Service\AppModel;
use Miaoxing\Plugin\Service\User;
use Miaoxing\Services\Middleware\BaseMiddleware;
use Wei\RetTrait;

class CheckAppStatus extends BaseMiddleware
{
    use RetTrait;

    /**
     * {@inheritdoc}
     */
    public function __invoke($next)
    {
        // 超级管理员下线也可以访问,以便进行功能调整
        if (User::cur()->isSuperAdmin()) {
            return $next();
        }

        $record = $this->app->getModel();
        if (isset($record['status']) && AppModel::STATUS_ONLINE != $record['status']) {
            return $this->err('很抱歉,该应用已经' . $record->getConstName('status', $record['status']));
        }

        return $next();
    }
}
