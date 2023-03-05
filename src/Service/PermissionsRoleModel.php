<?php

namespace Miaoxing\App\Service;

use Miaoxing\App\Metadata\PermissionsRoleTrait;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;

class PermissionsRoleModel extends BaseModel
{
    use HasAppIdTrait;
    use ModelTrait;
    use PermissionsRoleTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;
}
