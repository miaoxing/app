<?php

namespace Miaoxing\App\Service;

use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;
use Wei\Ret;

/**
 * @property string|null $id 编号
 * @property string $appId 应用编号
 * @property string $parentId 父级角色编号
 * @property int $level 层级
 * @property string $name 名称
 * @property string $code 标识
 * @property string $description 描述
 * @property bool $isEnabled 是否启用
 * @property array $actions 菜单和操作
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property string $createdBy
 * @property string $updatedBy
 * @property string|null $deletedAt
 * @property string $deletedBy
 * @property PermissionModel|PermissionModel[] $permissions
 * @property PermissionModel|PermissionModel[] $enabledPermissions
 * @property string|null $id 编号
 * @property string $appId 应用编号
 * @property string $parentId 父级角色编号
 * @property int $level 层级
 * @property string $name 名称
 * @property string $code 标识
 * @property string $description 描述
 * @property bool $isEnabled 是否启用
 * @property array $actions 菜单和操作
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property string $createdBy
 * @property string $updatedBy
 * @property string|null $deletedAt
 * @property string $deletedBy
 */
class RoleModel extends BaseModel
{
    use HasAppIdTrait;
    use ModelTrait;
    use ReqQueryTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;

    /**
     * @return PermissionModel|PermissionModel[]
     */
    public function permissions(): PermissionModel
    {
        return $this->belongsToMany(PermissionModel::class)->whereNull('permissions_roles.deleted_at');
    }

    /**
     * @return PermissionModel|PermissionModel[]
     */
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
