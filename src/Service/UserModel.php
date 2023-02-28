<?php

namespace Miaoxing\App\Service;

use Miaoxing\Admin\Service\GroupModel;
use Miaoxing\App\Metadata\UserTrait;
use Miaoxing\App\Model\BelongsToGroupTrait;
use Miaoxing\Plugin\Service\UserModel as BaseUserModel;

class UserModel extends BaseUserModel
{
    use BelongsToGroupTrait;
    use UserTrait;
}
