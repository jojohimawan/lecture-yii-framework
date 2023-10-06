<?php

use yii\db\Migration;

/**
 * Class m231006_075827_change_customer_email_datatype
 */
class m231006_075827_change_customer_email_datatype extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('customer', 'email', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('customer', 'email', $this->integer());

        echo "m231006_075827_change_customer_email_datatype reverted.\n";
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231006_075827_change_customer_email_datatype cannot be reverted.\n";

        return false;
    }
    */
}
