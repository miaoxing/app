<?php

namespace Miaoxing\App\Migration;

use Miaoxing\Plugin\BaseMigration;

class V20170117121751CreateTrashTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('trash')
            ->id()
            ->string('tableName', 64)
            ->text('data')
            ->softDeletableV1()
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->dropIfExists('trash');
    }
}
