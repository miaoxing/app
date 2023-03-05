<?php

namespace Miaoxing\App\Migration;

use Wei\Migration\BaseMigration;

class V20220810105803CreatePermissionTables extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('permissions')->tableComment('权限')
            ->bigId()->comment('编号')
            ->uBigInt('app_id')->comment('应用编号')
            ->string('name', 32)->comment('名称')
            ->string('code', 128)->comment('标识')
            ->string('description')->comment('描述')
            ->bool('is_enabled')->comment('是否启用')->defaults(true)
            ->timestamps()
            ->userstamps()
            ->softDeletable()
            ->exec();

        $this->schema->table('roles')->tableComment('角色')
            ->bigId()->comment('编号')
            ->uBigInt('app_id')->comment('应用编号')
            ->uBigInt('parent_id')->comment('父级角色编号')
            ->uTinyInt('level')->comment('层级')->defaults(1)
            ->string('name', 32)->comment('名称')
            ->string('code', 128)->comment('标识')
            ->string('description')->comment('描述')
            ->bool('is_enabled')->comment('是否启用')->defaults(true)
            ->json('actions')->comment('菜单和操作')
            ->timestamps()
            ->userstamps()
            ->softDeletable()
            ->exec();

        $this->schema->table('permissions_roles')->tableComment('角色权限')
            ->bigId()->comment('编号')
            ->uBigInt('app_id')->comment('应用编号')
            ->uBigInt('role_id')->comment('角色编号')
            ->uBigInt('permission_id')->comment('权限编号')
            ->timestamps()
            ->userstamps()
            ->softDeletable()
            ->exec();

        $this->schema->table('permissions_users')->tableComment('用户权限')
            ->bigId()
            ->uBigInt('app_id')->comment('应用编号')
            ->uBigInt('user_id')->comment('用户编号')
            ->uBigInt('permission_id')->comment('权限编号')
            ->timestamps()
            ->userstamps()
            ->softDeletable()
            ->exec();

        $this->schema->table('roles_users')->tableComment('用户角色')
            ->bigId()
            ->uBigInt('app_id')->comment('应用编号')
            ->uBigInt('user_id')->comment('用户编号')
            ->uBigInt('role_id')->comment('角色编号')
            ->timestamps()
            ->userstamps()
            ->softDeletable()
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->dropIfExists('permissions');
        $this->schema->dropIfExists('roles');
        $this->schema->dropIfExists('permissions_roles');
        $this->schema->dropIfExists('permissions_users');
        $this->schema->dropIfExists('roles_users');
    }
}
