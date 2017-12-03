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
            'title' => $this->string(255)->notNull(),
            'description' => $this->string(500)->notNull(),
            'description_product' => $this->string(500)->notNull(),
            'content' => $this->string(10000)->notNull(),
            'img' => $this->string(255)->notNull(),
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
