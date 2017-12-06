<?php

use yii\db\Migration;

/**
 * Class m171120_232322_category_value
 */
class m171120_232322_category_value extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%category_value}}', [
            'id' => $this->primaryKey(11),
            'profile_id' => $this->integer(11)->notNull(),
            'category_id' => $this->integer(11)->notNull(),
            'value' => $this->string(255)->notNull(),          
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171120_232322_category_value cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171120_232322_category_value cannot be reverted.\n";

        return false;
    }
    */
}
