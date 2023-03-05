<?php

/**
 * @property    Miaoxing\App\Service\GroupModel $groupModel GroupModel
 */
class GroupModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\GroupModel $groupModel GroupModel
 */
class GroupModelPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\JsConfig $jsConfig
 */
class JsConfigMixin
{
}

/**
 * @property    Miaoxing\App\Service\JsConfig $jsConfig
 */
class JsConfigPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\Permission $permission
 */
class PermissionMixin
{
}

/**
 * @property    Miaoxing\App\Service\Permission $permission
 */
class PermissionPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionMap $permissionMap
 */
class PermissionMapMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionMap $permissionMap
 */
class PermissionMapPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionModel $permissionModel
 */
class PermissionModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionModel $permissionModel
 */
class PermissionModelPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionsRoleModel $permissionsRoleModel
 */
class PermissionsRoleModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\PermissionsRoleModel $permissionsRoleModel
 */
class PermissionsRoleModelPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\RoleModel $roleModel
 */
class RoleModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\RoleModel $roleModel
 */
class RoleModelPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\RolesUserModel $rolesUserModel
 */
class RolesUserModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\RolesUserModel $rolesUserModel
 */
class RolesUserModelPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\UserModel $userModel
 */
class UserModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\UserModel $userModel
 */
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
class AutoCompletion
{
}

/**
 * @return AutoCompletion
 */
function wei()
{
    return new AutoCompletion();
}

/** @var Miaoxing\App\Service\GroupModel $group */
$group = wei()->groupModel;

/** @var Miaoxing\App\Service\GroupModel|Miaoxing\App\Service\GroupModel[] $groups */
$groups = wei()->groupModel();

/** @var Miaoxing\App\Service\JsConfig $jsConfig */
$jsConfig = wei()->jsConfig;

/** @var Miaoxing\App\Service\Permission $permission */
$permission = wei()->permission;

/** @var Miaoxing\App\Service\PermissionMap $permissionMap */
$permissionMap = wei()->permissionMap;

/** @var Miaoxing\App\Service\PermissionModel $permission */
$permission = wei()->permissionModel;

/** @var Miaoxing\App\Service\PermissionModel|Miaoxing\App\Service\PermissionModel[] $permissions */
$permissions = wei()->permissionModel();

/** @var Miaoxing\App\Service\PermissionsRoleModel $permissionsRole */
$permissionsRole = wei()->permissionsRoleModel;

/** @var Miaoxing\App\Service\PermissionsRoleModel|Miaoxing\App\Service\PermissionsRoleModel[] $permissionsRoles */
$permissionsRoles = wei()->permissionsRoleModel();

/** @var Miaoxing\App\Service\RoleModel $role */
$role = wei()->roleModel;

/** @var Miaoxing\App\Service\RoleModel|Miaoxing\App\Service\RoleModel[] $roles */
$roles = wei()->roleModel();

/** @var Miaoxing\App\Service\RolesUserModel $rolesUser */
$rolesUser = wei()->rolesUserModel;

/** @var Miaoxing\App\Service\RolesUserModel|Miaoxing\App\Service\RolesUserModel[] $rolesUsers */
$rolesUsers = wei()->rolesUserModel();

/** @var Miaoxing\App\Service\UserModel $user */
$user = wei()->userModel;

/** @var Miaoxing\App\Service\UserModel|Miaoxing\App\Service\UserModel[] $users */
$users = wei()->userModel();
