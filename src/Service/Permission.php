<?php

namespace Miaoxing\App\Service;

use Miaoxing\Plugin\BaseService;

class Permission extends BaseService
{
    /**
     * @var bool
     * @api
     */
    protected $isEnabledCheck = false;

    /**
     * @var bool
     * @api
     */
    protected $isEnabledRoleManage = false;

    /**
     * @var bool
     * @api
     */
    protected $isEnabledPermissionManage = false;

    /**
     * Whether enabled check permission
     *
     * @return bool
     * @svc
     */
    protected function isEnabledCheck(): bool
    {
        return $this->isEnabledCheck;
    }

    /**
     * Whether enabled role management
     *
     * @return bool
     * @svc
     */
    protected function isEnabledRoleManage(): bool
    {
        return $this->isEnabledRoleManage;
    }

    /**
     * Whether enabled permission management
     *
     * @return bool
     * @svc
     */
    protected function isEnabledPermissionManage(): bool
    {
        return $this->isEnabledPermissionManage;
    }
}
