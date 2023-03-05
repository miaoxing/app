<?php

namespace Miaoxing\App\Service;

use Miaoxing\App\Metadata\RoleTrait;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;
use Wei\Ret;

/**
 * @property PermissionModel|PermissionModel[] $permissions
 * @property PermissionModel|PermissionModel[] $enabledPermissions
 */
class RoleModel extends BaseModel
{
    use HasAppIdTrait;
    use ModelTrait;
    use ReqQueryTrait;
    use RoleTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;

    public function permissions(): PermissionModel
    {
        return $this->belongsToMany(PermissionModel::class)->whereNull('permissions_roles.deleted_at');
    }

    public function enabledPermissions(): PermissionModel
    {
        return $this->permissions()->where('isEnabled', true);
    }

    public function checkDestroy(): Ret
    {
        if (RolesUserModel::findBy('roleId', $this->id)) {
            return err(['很抱歉，该%s已被%s使用，不能删除', '角色', '用户']);
        }
        return suc();
    }
}
