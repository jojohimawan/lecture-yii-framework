<?php

use yii\db\Migration;

class m230831_030923_create_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('item', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'price' => $this->integer(),
            'category_id' => $this->integer()->notNull(),
        ]);

        // define foreign key for item.category_id -> item_category.id
        $this->addForeignKey(
            'fk-item-category_id',
            'item',
            'category_id',
            'item_category',
            'id',
            'CASCADE',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-item-category_id',
            'post',
        );

        $this->dropTable('{{%item}}');
    }
}
