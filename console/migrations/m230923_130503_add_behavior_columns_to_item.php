<?php

use yii\db\Migration;

/**
 * Class m230923_130503_add_behavior_columns_to_item
 */
class m230923_130503_add_behavior_columns_to_item extends Migration
{
    /**
     * {@inheritdoc}
     */
    // TODO: Minggu 5 Latihan
    public function safeUp()
    {
        $this->addColumn('item', 'created_at', $this->integer(11));
        $this->addColumn('item', 'updated_at', $this->integer(11));
        $this->addColumn('item', 'created_by', $this->integer());
        $this->addColumn('item', 'updated_by', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('item', 'created_at');
        $this->dropColumn('item', 'updated_at');
        $this->dropColumn('item', 'created_by');
        $this->dropColumn('item', 'updated_by');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230923_130503_add_behavior_columns_to_item cannot be reverted.\n";

        return false;
    }
    */
}
