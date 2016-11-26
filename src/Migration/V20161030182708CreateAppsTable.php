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
        $this->scheme->table($this->table)
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
            ->timestamps()
            ->userstamps()
            ->exec();

        $now = date('Y-m-d H:i:s');
        $this->db->insertBatch($this->table, [[
            'userId' => 1,
            'name' => 'app',
            'title' => 'app',
            'pluginIds' => '',
            'created_at' => $now,
            'created_by' => 1,
            'updated_at' => $now,
            'updated_by' => 1,
        ], [
            'userId' => 1,
            'name' => 'test',
            'title' => 'test',
            'pluginIds' => '',
            'created_at' => $now,
            'created_by' => 1,
            'updated_at' => $now,
            'updated_by' => 1,
        ]]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->scheme->dropIfExists($this->table);
    }
}
