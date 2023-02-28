<?php

namespace Miaoxing\App\Service;

use Miaoxing\App\Metadata\GroupTrait;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Miaoxing\Plugin\Service\UserModel;
use Wei\Model\SoftDeleteTrait;
use Wei\Ret;

/**
 * GroupModel
 *
 * @OA\Schema(schema="Group")
 * @OA\Property(
 *   property="id",
 *   type="string",
 *   description="编号"
 * )
 * @OA\Property(
 *   property="appId",
 *   type="string",
 *   description="应用编号"
 * )
 * @OA\Property(
 *   property="name",
 *   type="string",
 *   description="名称"
 * )
 * @OA\Property(
 *   property="sort",
 *   type="int",
 *   description="顺序"
 * )
 * @OA\Property(
 *   property="createdBy",
 *   type="string",
 *   description="创建用户编号"
 * )
 * @OA\Property(
 *   property="createdAt",
 *   type="string",
 *   description="创建时间"
 * )
 *  @OA\Property(
 *   property="updatedBy",
 *   type="string",
 *   description="更新用户编号"
 * )
 * @OA\Property(
 *   property="updatedAt",
 *   type="string",
 *   description="更新时间"
 * )
 * @property GroupModel $parent
 * @property GroupModel[]|GroupModel $children
 */
class GroupModel extends BaseModel
{
    use GroupTrait;
    use HasAppIdTrait;
    use ModelTrait;
    use ReqQueryTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;

    protected $attributes = [
        'sort' => 50,
    ];

    /**
     * @var GroupModel|GroupModel[]
     */
    protected $parents;

    public function parent(): self
    {
        return $this->hasOne(static::class, 'id', 'parentId');
    }

    public function children(): self
    {
        return $this->hasMany(static::class, 'parentId')->desc('sort');
    }

    public function afterSave()
    {
        wei()->cache->delete('groups:' . wei()->app->getId());
    }

    public function afterDestroy()
    {
        wei()->cache->delete('groups:' . wei()->app->getId());
    }

    public function getFullName()
    {
        return implode('-', array_reverse($this->getParents()->getAll('name')));
    }

    /**
     * 获取分组的所有上级分组
     *
     * @return GroupModel|GroupModel[]
     * @throws \Exception
     */
    public function getParents()
    {
        if (!$this->parents) {
            $groups = wei()->group->getGroupsFromCache();

            $parents = wei()->groupModel()->beColl();
            $parents[] = $this;

            $group = $this;
            while ($group->parentId) {
                $group = $groups[$group->parentId];
                $parents[] = $group;
            }

            $this->parents = $parents;
        }

        return $this->parents;
    }

    public function checkDestroy(): Ret
    {
        if (UserModel::findBy('groupId', $this->id)) {
            return err(['很抱歉，该%s已被%s使用，不能删除', '分组', '用户']);
        }
        return suc();
    }
}
