<?php

namespace Miaoxing\App\Migration;

use Wei\Migration\BaseMigration;

class V20161030010000AddGroupIdToUsersTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('users')
            ->uBigInt('group_id')->comment('用户组')->after('out_id')
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->table('users')
            ->dropColumn('group_id')
            ->exec();
    }
}
