<?php

namespace Miaoxing\App\Service;

use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\IpTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Service\User;

/**
 * @mixin \StrPropMixin
 * @property string|null $id
 * @property string $appId 应用编号
 * @property string $userId
 * @property string $username 用户名
 * @property int $type 操作类型
 * @property int $code 返回代码
 * @property string $message 返回消息
 * @property int $platform 平台，默认为浏览器
 * @property string $userAgent 用户代理
 * @property string|null $createdAt 创建时间
 * @property string $createdBy 创建用户编号
 * @property string $createdIp 创建用户 IP
 * @property string $createdIpAddress 创建用户地址
 */
class LoginLogModel extends BaseModel
{
    use HasAppIdTrait;
    use IpTrait;
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
