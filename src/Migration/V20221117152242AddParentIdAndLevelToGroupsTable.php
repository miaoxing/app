<?php

namespace Miaoxing\App\Migration;

use Wei\Migration\BaseMigration;

class V20221117152242AddParentIdAndLevelToGroupsTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('groups')
            ->uBigInt('parent_id')->comment('父级分组编号')->after('app_id')
            ->uSmallInt('level')->comment('层级')->defaults(1)->after('parent_id')
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->table('groups')
            ->dropColumn(['parent_id', 'level'])
            ->exec();
    }
}
