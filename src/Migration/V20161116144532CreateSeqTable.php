<?php

namespace Miaoxing\App\Migration;

use Miaoxing\Plugin\BaseMigration;

class V20161116144532CreateSeqTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->scheme->table('seq')
            ->bigInt('id')->autoIncrement()
            ->primary('id')
            ->exec();

        $this->db->insert('seq', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->scheme->dropIfExists('seq');
    }
}