<?php

namespace Miaoxing\App\Service;

use Miaoxing\App\Metadata\UserTrait;
use Miaoxing\App\Model\BelongsToGroupTrait;
use Miaoxing\App\Model\HasPermissionTrait;
use Miaoxing\Plugin\Service\UserModel as BaseUserModel;

/**
 * @property RoleModel|RoleModel[] $roles
 * @property RoleModel|RoleModel[] $enabledRoles
 * @property PermissionModel|PermissionModel[] $permissions
 * @property PermissionModel|PermissionModel[] $enabledPermissions
 */
class UserModel extends BaseUserModel
{
    use BelongsToGroupTrait;
    use HasPermissionTrait;
    use UserTrait;

    public function roles(): RoleModel
    {
        return $this->belongsToMany(RoleModel::class)->whereNull('roles_users.deleted_at');
    }

    public function enabledRoles(): RoleModel
    {
        return $this->roles()->where('isEnabled', true);
    }

    public function permissions(): PermissionModel
    {
        return $this->belongsToMany(PermissionModel::class)->whereNull('permissions_users.deleted_at');
    }

    public function enabledPermissions(): PermissionModel
    {
        return $this->permissions()->where('isEnabled', true);
    }
}
