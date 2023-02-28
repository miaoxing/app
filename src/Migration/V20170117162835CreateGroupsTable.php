<?php

namespace Miaoxing\App\Migration;

use Wei\Migration\BaseMigration;

class V20170117162835CreateGroupsTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('groups')->tableComment('用户分组')
            ->bigId()
            ->uBigInt('app_id')->comment('应用编号')
            ->string('name', 64)
            ->uInt('sort')->defaults(50)
            ->uTinyInt('status')
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
        $this->schema->dropIfExists('groups');
    }
}
