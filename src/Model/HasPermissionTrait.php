<?php

namespace Miaoxing\App\Model;

use Miaoxing\App\Service\Permission;
use Wei\Ret;

/**
 * @mixin \LoggerPropMixin
 * @mixin \PermissionMapPropMixin
 * @mixin \PermissionPropMixin
 */
trait HasPermissionTrait
{
    public function getPermissionCodes(): array
    {
        if (!$this->permission->isEnabledCheck()) {
            return ['*'];
        }

        return array_unique(array_merge(
            $this->getActionPermissionCodes(),
            $this->enabledRoles->enabledPermissions->getAll('code'),
            $this->enabledPermissions->getAll('code')
        ));
    }

    /**
     * @return string[]
     */
    public function getActionPermissionCodes(): array
    {
        if ($this->isSuperAdmin()) {
            return ['*'];
        }

        $actions = $this->enabledRoles->getAll('actions');
        return array_unique(array_merge(...$actions));
    }

    /**
     * Check if user have the specified permission
     *
     * @param string $code
     * @return Ret
     */
    public function checkPermission(string $code): Ret
    {
        if ($this->hasPermission($code)) {
            return suc();
        }
        return err('很抱歉，您没有权限执行该操作');
    }

    /**
     * Whether the user have the specified permission
     *
     * @param string $code
     * @return bool
     */
    public function hasPermission(string $code): bool
    {
        // TODO 根据场景实现逐级查找，变量查找按需查找
        return in_array($code, $this->getPermissionCodes(), true);
    }

    /**
     * @param string $method
     * @param string $path
     * @return Ret
     */
    public function checkPagePermission(string $method, string $path): Ret
    {
        if ($this->hasPagePermission($method, $path)) {
            return suc();
        }
        return err('很抱歉，您没有权限执行该操作');
    }

    public function hasPagePermission(string $method, string $path): bool
    {
        if ($this->isSuperAdmin()) {
            return true;
        }

        // 1. 获取权限
        $permissions = $this->getActionPermissionCodes();
        $this->logger->debug('Get user menu permissions', $permissions);

        // 2. 转换菜单为页面
        $map = $this->permissionMap->getMap();
        $map = array_intersect_key($map, array_flip($permissions));
        $map = array_unique(array_merge(...array_values($map)));
        $this->logger->debug('Get user action permissions', $map);

        // 3. 检查当前页面是否在里面
        $path = ltrim($path, '/');
        if ($this->hasPagePermissionIn($method, $path, $map)) {
            return true;
        }

        // Whether has role permission
        $rolePermissionCodes = $this->enabledRoles->enabledPermissions->getAll('code');
        if ($this->hasPagePermissionIn($method, $path, $rolePermissionCodes)) {
            return true;
        }

        // Whether has direct permission
        $permissionCodes = $this->enabledPermissions->getAll('code');
        return $this->hasPagePermissionIn($method, $path, $permissionCodes);
    }

    /**
     * Whether has page permission in the specified permission codes
     *
     * @param string $method
     * @param string $path
     * @param array $permissions
     * @return bool
     */
    protected function hasPagePermissionIn(string $method, string $path, array $permissions): bool
    {
        $path = ltrim($path, '/');
        foreach ($permissions as $permission) {
            $parts = explode(' ', $permission, 2);
            $apiMethod = $parts[0];
            $apiPath = $parts[1] ?? null;

            if ($method !== $apiMethod) {
                continue;
            }

            if ($apiPath === $path) {
                return true;
            }

            if (false !== strpos($apiPath, '[')) {
                $regex = preg_replace('#[.\+*?[^\]${}=!|:-]#', '\\\$0', $apiPath);
                $regex = str_replace(['\[', '\]'], ['(?P<', '>.+?)'], $regex);
                $regex = '#^' . $regex . '$#uUD';
                if (preg_match($regex, $path)) {
                    return true;
                }
            }
        }
        return false;
    }
}
