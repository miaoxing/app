<?php

/**
 * @property    Miaoxing\App\Service\GroupModel $groupModel GroupModel
 */
 #[\AllowDynamicProperties]
class GroupModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\GroupModel $groupModel GroupModel
 */
 #[\AllowDynamicProperties]
class GroupModelPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\JsConfig $jsConfig
 */
 #[\AllowDynamicProperties]
class JsConfigMixin
{
}

/**
 * @property    Miaoxing\App\Service\JsConfig $jsConfig
 */
 #[\AllowDynamicProperties]
class JsConfigPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\Permission $permission
 */
 #[\AllowDynamicProperties]
class PermissionMixin
{
}

/**
 * @property    Miaoxing\App\Service\Permission $permission
 */
 #[\AllowDynamicProperties]
class PermissionPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionMap $permissionMap
 */
 #[\AllowDynamicProperties]
class PermissionMapMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionMap $permissionMap
 */
 #[\AllowDynamicProperties]
class PermissionMapPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionModel $permissionModel
 */
 #[\AllowDynamicProperties]
class PermissionModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionModel $permissionModel
 */
 #[\AllowDynamicProperties]
class PermissionModelPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionsRoleModel $permissionsRoleModel
 */
 #[\AllowDynamicProperties]
class PermissionsRoleModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionsRoleModel $permissionsRoleModel
 */
 #[\AllowDynamicProperties]
class PermissionsRoleModelPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\RoleModel $roleModel
 */
 #[\AllowDynamicProperties]
class RoleModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\RoleModel $roleModel
 */
 #[\AllowDynamicProperties]
class RoleModelPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\RolesUserModel $rolesUserModel
 */
 #[\AllowDynamicProperties]
class RolesUserModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\RolesUserModel $rolesUserModel
 */
 #[\AllowDynamicProperties]
class RolesUserModelPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\UserModel $userModel
 */
 #[\AllowDynamicProperties]
class UserModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\UserModel $userModel
 */
 #[\AllowDynamicProperties]
class UserModelPropMixin
{
}

/**
 * @mixin GroupModelMixin
 * @mixin JsConfigMixin
 * @mixin PermissionMixin
 * @mixin PermissionMapMixin
 * @mixin PermissionModelMixin
 * @mixin PermissionsRoleModelMixin
 * @mixin RoleModelMixin
 * @mixin RolesUserModelMixin
 * @mixin UserModelMixin
 */
 #[\AllowDynamicProperties]
class AutoCompletion
{
}

/**
 * @return AutoCompletion|Wei\Wei
 */
function wei()
{
    return new AutoCompletion(func_get_args());
}
