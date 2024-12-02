<?php

namespace Miaoxing\App\Metadata;

/**
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
 * @internal will change in the future
 */
trait LoginLogTrait
{
}
