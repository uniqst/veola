<?php

use yii\db\Migration;

/**
 * Class m171203_132829_photo
 */
class m171203_132829_photo extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%photo}}', [
            'id' => $this->primaryKey(11),
            'product_id' => $this->integer(11)->notNull(),
            'img' => $this->string(255),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171203_132829_photo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171203_132829_photo cannot be reverted.\n";

        return false;
    }
    */
}
