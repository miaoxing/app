<?php

namespace Miaoxing\App\Service;

use Miaoxing\App\Metadata\LoginLogTrait;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\IpTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Service\User;

/**
 * @mixin \StrPropMixin
 */
class LoginLogModel extends BaseModel
{
    use HasAppIdTrait;
    use IpTrait;
    use LoginLogTrait;
    use ModelTrait;
    use ReqQueryTrait;

    public const TYPE_LOGIN = 1;

    public const TYPE_LOGIN_FAILED = 2;

    public const TYPE_LOGOUT = 3;

    /**
     * 记录登录日志
     *
     * @param array $data
     * @svc
     */
    protected function log(array $data)
    {
        $user = User::cur();
        $this->saveAttributes(array_merge([
            'userId' => $user->id ?? 0,
            'username' => $user->username ?? '',
            'userAgent' => $this->str->cut($this->req->getHeader('USER_AGENT'), 255),
        ], $data));
    }
}
