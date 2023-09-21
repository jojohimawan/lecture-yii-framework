<?php

use yii\db\Migration;

/**
 * Class m230921_053006_add_behavior_column_to_statistics
 */
class m230921_053006_add_behavior_column_to_statistics extends Migration
{
    /**
     * {@inheritdoc}
     */
    // TODO: Minggu 5 Latihan
    public function safeUp()
    {
        $this->addColumn('statistics', 'created_at', $this->integer(11));
        $this->addColumn('statistics', 'updated_at', $this->integer(11));
        $this->addColumn('statistics', 'created_by', $this->integer());
        $this->addColumn('statistics', 'updated_by', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('statistics', 'created_at');
        $this->dropColumn('statistics', 'updated_at');
        $this->dropColumn('statistics', 'created_by');
        $this->dropColumn('statistics', 'updated_by');

        return false;
    }
}
