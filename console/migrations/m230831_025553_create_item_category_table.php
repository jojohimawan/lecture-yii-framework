<?php
use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%item_category}}`.
 */
class m230831_025553_create_item_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('item_category', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'parent_category' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('item_category');
    }
}
