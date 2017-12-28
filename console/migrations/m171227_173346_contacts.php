<?php

use yii\db\Migration;

/**
 * Class m171227_173346_contacts
 */
class m171227_173346_contacts extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%contacts}}', [
            'id' => $this->primaryKey(11),
            'phone' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171227_173346_contacts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171227_173346_contacts cannot be reverted.\n";

        return false;
    }
    */
}
