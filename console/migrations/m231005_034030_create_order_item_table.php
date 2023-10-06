<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_item}}`.
 */
class m231005_034030_create_order_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_item}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'item_id' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk-order-order_id',
            'order_item',
            'order_id',
            'order',
            'id',
            'CASCADE',
        );

        $this->addForeignKey(
            'fk-item-item_id',
            'order_item',
            'item_id',
            'item',
            'id',
            'CASCADE',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_item}}');
    }
}
