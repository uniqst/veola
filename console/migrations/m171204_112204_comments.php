<?php

use yii\db\Migration;

/**
 * Class m171204_112204_comments
 */
class m171204_112204_comments extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(11),
            'product_id' => $this->integer(11)->notNull(),
            'name' => $this->string(50)->notNull(),
            'email' => $this->string(50)->notNull(),
            'content' => $this->string(500)->notNull(),
            'rating' => $this->integer(11),
            'created_at' => $this->dateTime()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171204_112204_comments cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171204_112204_comments cannot be reverted.\n";

        return false;
    }
    */
}
