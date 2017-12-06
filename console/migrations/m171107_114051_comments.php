<?php

use yii\db\Migration;

/**
 * Class m171107_114051_comments
 */
class m171107_114051_comments extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(11),
            'parent_id' => $this->integer(11)->notNull(),
            'profile_id' => $this->integer(11)->notNull(),
            'email' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'content' => $this->string(400)->notNull(),
            'status' => $this->integer(11),
            'is_viewed' => $this->integer(11),
            'date' => $this->dateTime()->notNull(),
            
        ]);

        $this->createIndex('parent_id', '{{%comments}}', 'parent_id');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171107_114051_comments cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171107_114051_comments cannot be reverted.\n";

        return false;
    }
    */
}
