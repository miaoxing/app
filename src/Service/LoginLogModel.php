<?php

namespace Miaoxing\App\Service;

use Miaoxing\App\Metadata\LoginLogTrait;
use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\IpTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;

class LoginLogModel extends BaseModel
{
    use LoginLogTrait;
    use ModelTrait;
    use ReqQueryTrait;
    use IpTrait;
}
