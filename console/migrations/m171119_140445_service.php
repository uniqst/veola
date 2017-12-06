<?php

use yii\db\Migration;

/**
 * Class m171119_140445_service
 */
class m171119_140445_service extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
         $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(255)->notNull(),
            'content' => $this->string(1000)->notNull(),
            'img' => $this->string(255)->notNull(),
            'date' => $this->string(255),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171119_140445_service cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171119_140445_service cannot be reverted.\n";

        return false;
    }
    */
}
