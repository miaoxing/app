<?php

namespace Miaoxing\App\Service;

use Miaoxing\App\Model\BelongsToGroupTrait;
use Miaoxing\App\Model\HasPermissionTrait;
use Miaoxing\Plugin\Service\UserModel as BaseUserModel;

/**
 * @property string|null $id
 * @property string $appId
 * @property string $outId
 * @property int $adminType 管理员类型
 * @property string $groupId 用户组
 * @property bool $isAdmin
 * @property string $nickName
 * @property string $remarkName
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string|null $mobileVerifiedAt 手机校验时间
 * @property string $phone
 * @property string $password
 * @property int $sex
 * @property string $country
 * @property string $province
 * @property string $city
 * @property string $district
 * @property string $address
 * @property string $signature
 * @property bool $isEnabled 是否启用
 * @property string $avatar
 * @property string|null $lastLoginAt
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property string $createdBy
 * @property string $updatedBy
 * @property int $score 积分
 * @property string $money 账户余额
 * @property string $rechargeMoney 充值账户余额
 * @property string $source 用户来源
 * @property string|null $displayName
 * @property RoleModel|RoleModel[] $roles
 * @property RoleModel|RoleModel[] $enabledRoles
 * @property PermissionModel|PermissionModel[] $permissions
 * @property PermissionModel|PermissionModel[] $enabledPermissions
 * @property GroupModel $group
 */
class UserModel extends BaseUserModel
{
    use BelongsToGroupTrait;
    use HasPermissionTrait;

    /**
     * @return RoleModel|RoleModel[]
     */
    public function roles(): RoleModel
    {
        return $this->belongsToMany(RoleModel::class)->whereNull('roles_users.deleted_at');
    }

    /**
     * @return RoleModel|RoleModel[]
     */
    public function enabledRoles(): RoleModel
    {
        return $this->roles()->where('isEnabled', true);
    }

    /**
     * @return PermissionModel|PermissionModel[]
     */
    public function permissions(): PermissionModel
    {
        return $this->belongsToMany(PermissionModel::class)->whereNull('permissions_users.deleted_at');
    }

    /**
     * @return PermissionModel|PermissionModel[]
     */
    public function enabledPermissions(): PermissionModel
    {
        return $this->permissions()->where('isEnabled', true);
    }
}
