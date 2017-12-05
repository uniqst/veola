<?php

use yii\db\Migration;

/**
 * Class m171205_152410_order_items
 */
class m171205_152410_order_items extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%order_items}}', [
            'id' => $this->primaryKey(11),
            'order_id' => $this->integer(11)->notNull(),
            'product_id' => $this->integer(11)->notNull(),
            'name' => $this->string(255)->notNull(),
            'price' => $this->float()->notNull(),
            'qty_item' => $this->integer(11)->notNull(),
            'sum_item' => $this->float()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171205_152410_order_items cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171205_152410_order_items cannot be reverted.\n";

        return false;
    }
    */
}
