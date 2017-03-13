<?php

namespace Miaoxing\App\Migration;

use Miaoxing\Plugin\BaseMigration;

class V20161030182708CreateAppsTable extends BaseMigration
{
    protected $table = 'apps2';

    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table($this->table)
            ->id()
            ->int('userId')
            ->text('pluginIds')
            ->string('name', 16)
            ->string('title', 32)
            ->char('secret', 32)
            ->string('domain', 128)
            ->string('description', 255)
            ->string('industry', 16)
            ->string('configs', 255)
            ->timestampsV1()
            ->userstampsV1()
            ->exec();

        $now = date('Y-m-d H:i:s');
        $this->db->insertBatch($this->table, [[
            'userId' => 1,
            'name' => 'app',
            'title' => 'app',
            'pluginIds' => '',
            'createTime' => $now,
            'createUser' => 1,
            'updateTime' => $now,
            'updateUser' => 1,
        ], [
            'userId' => 1,
            'name' => 'test',
            'title' => 'test',
            'pluginIds' => '',
            'createTime' => $now,
            'createUser' => 1,
            'updateTime' => $now,
            'updateUser' => 1,
        ]]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->dropIfExists($this->table);
    }
}
