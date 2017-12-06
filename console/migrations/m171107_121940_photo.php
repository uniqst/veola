<?php

use yii\db\Migration;

/**
 * Class m171107_121940_photo
 */
class m171107_121940_photo extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
         $this->createTable('{{%photo}}', [
            'id' => $this->primaryKey(11),
            'profile_id' => $this->integer(11)->notNull(),
            'src' => $this->string(255),
            
        ]);

        $this->createIndex('profile_id', '{{%photo}}', 'profile_id');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171107_121940_photo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171107_121940_photo cannot be reverted.\n";

        return false;
    }
    */
}
