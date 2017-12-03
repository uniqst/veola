<?php

use yii\db\Migration;

/**
 * Class m171203_015211_instructions
 */
class m171203_015211_instructions extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%instructions}}', [
            'id' => $this->primaryKey(11),
            'title' => $this->string()->notNull(),
            'content' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171203_015211_instructions cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171203_015211_instructions cannot be reverted.\n";

        return false;
    }
    */
}
