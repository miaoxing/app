<?php

namespace Miaoxing\App\Service;

use Miaoxing\Admin\Service\GroupModel;
use Miaoxing\App\Metadata\UserTrait;
use Miaoxing\Plugin\Service\UserModel as BaseUserModel;

/**
 * @property GroupModel $group
 */
class UserModel extends BaseUserModel
{
    use UserTrait;

    public function group()
    {
        return $this->hasOne(GroupModel::class, 'id', 'groupId');
    }
}
