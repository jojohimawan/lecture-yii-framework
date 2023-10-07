<?php

use yii\db\Migration;

/**
 * Class m231007_063020_add_image_column_to_item
 */
class m231007_063020_add_image_column_to_item extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('item', 'image', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('item', 'image');

        echo "m231007_063020_add_image_column_to_item reverted.\n";
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231007_063020_add_image_column_to_item cannot be reverted.\n";

        return false;
    }
    */
}
