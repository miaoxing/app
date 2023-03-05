<?php

namespace Miaoxing\App\Service;

use Miaoxing\App\Metadata\RolesUserTrait;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Wei\Model\SoftDeleteTrait;

class RolesUserModel extends BaseModel
{
    use HasAppIdTrait;
    use ModelTrait;
    use RolesUserTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;
}
