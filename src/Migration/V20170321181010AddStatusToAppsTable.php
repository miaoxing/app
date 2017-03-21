<?php

namespace Miaoxing\App\Migration;

use Miaoxing\Plugin\BaseMigration;

class V20170321181010AddStatusToAppsTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('apps')
            ->tinyInt('status')->defaults(1)->after('industry')
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->table('apps')
            ->dropColumn('status')
            ->exec();
    }
}
