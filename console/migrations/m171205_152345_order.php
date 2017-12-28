<?php

use yii\db\Migration;

/**
 * Class m171205_152345_order
 */
class m171205_152345_order extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(11),
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime()->notNull(),
            'qty' => $this->integer(11)->notNull(),
            'sum' => $this->float()->notNull(),
            'status' => "ENUM('0', '1') NOT NULL DEFAULT '0'",
            'pay' => "ENUM('0', '1') NOT NULL DEFAULT '0'",
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'phone' => $this->string(255)->notNull(),
            'address' => $this->string(255)->notNull(),
            'delivery' => $this->integer(11)->notNull(),
            'address_delivery ' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171205_152345_order cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171205_152345_order cannot be reverted.\n";

        return false;
    }
    */
}
