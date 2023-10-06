<?php

use yii\db\Migration;

/**
 * Class m231006_070332_add_user_customer_relation
 */
class m231006_070332_add_user_customer_relation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk-customer-user_id',
            'customer',
            'user_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {   
        $this->dropForeignKey(
            'fk-customer-user_id',
            'customer'
        );

        echo "m231006_070332_add_user_customer_relation reverted.\n";
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231006_070332_add_user_customer_relation cannot be reverted.\n";

        return false;
    }
    */
}
