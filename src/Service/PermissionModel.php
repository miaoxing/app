<?php

namespace Miaoxing\App\Service;

use Miaoxing\App\Metadata\PermissionTrait;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;

class PermissionModel extends BaseModel
{
    use HasAppIdTrait;
    use ModelTrait;
    use PermissionTrait;
    use ReqQueryTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;
}
