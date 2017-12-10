<?php

use yii\db\Migration;

/**
 * Class m171203_114710_products
 */
class m171203_114710_products extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(11),
            'category_id' => $this->integer(11),
            'title' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'group' => $this->string(255),
            'description' => $this->string(500)->notNull(),
            'description_product' => $this->string(500)->notNull(),
            'content' => $this->string(10000)->notNull(),
            'price' => $this->float(11)->notNull(),
            'old_price' => $this->float(11),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171203_114710_products cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171203_114710_products cannot be reverted.\n";

        return false;
    }
    */
}
