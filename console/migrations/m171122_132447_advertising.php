<?php

use yii\db\Migration;

/**
 * Class m171122_132447_advertising
 */
class m171122_132447_advertising extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%advertising}}', [
            'id' => $this->primaryKey(11),
            'position' => $this->integer(11)->notNull(),
            'img' => $this->string(255)->notNull(),
            'href' => $this->string(255)->notNull(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171122_132447_advertising cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171122_132447_advertising cannot be reverted.\n";

        return false;
    }
    */
}
