<?php

namespace Miaoxing\App\Migration;

use Miaoxing\Plugin\BaseMigration;

class V20161103140841CreateUserLogsTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->scheme->table('userLogs')
            ->id()
            ->int('appId')
            ->int('userId')
            ->string('nickName', 32)
            ->string('page', 64)
            ->string('action', 16)
            ->string('param', 64)
            ->string('ret', 64)
            ->string('oldValue', 64)
            ->string('newValue', 64)
            ->timestamp('confirmTime')
            ->int('confirmUser')
            ->timestamps()
            ->int('updateUser')
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->scheme->dropIfExists('userLogs');
    }
}
