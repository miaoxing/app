<?php

namespace Miaoxing\App\Middleware;

use Miaoxing\Plugin\Service\User;
use Miaoxing\Services\Middleware\BaseMiddleware;
use Wei\BaseController;

class CheckPagePermission extends BaseMiddleware
{
    public function __invoke($next, ?BaseController $controller = null)
    {
        if (false === $controller->getOption('requireAuth')) {
            return $next();
        }

        /** @phpstan-ignore-next-line Call to an undefined method */
        $ret = User::cur()->checkPagePermission($this->req->getMethod(), $this->req->getPathInfo());
        if ($ret->isErr()) {
            return $ret;
        }
        return $next();
    }
}
