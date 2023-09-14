<?php

namespace Miaoxing\App\Middleware;

use Miaoxing\Services\Middleware\BaseMiddleware;
use Wei\Ret;

/**
 * @mixin \LoggerPropMixin
 * @mixin \RandomPropMixin
 * @experimental
 */
class LogRequest extends BaseMiddleware
{
    public function __invoke($next)
    {
        $this->logger->setContext([
            'requestId' => $this->random->string(8),
        ]);

        $this->logger->debug('request', [
            'url' => $this->req->getUrl(),
            'method' => $this->req->getMethod(),
            'data' => $this->req->getData(),
            'ip' => $this->req->getIp(),
        ]);

        $result = $next();

        $this->logger->debug('response', [
            'code' => $result instanceof Ret ? $result->getCode() : '',
            'message' => $result instanceof Ret ? $result->getMessage() : '',
            'headers' => $this->res->getHeaders(),
        ]);

        return $result;
    }
}
