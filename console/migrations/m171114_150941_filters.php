<?php

use yii\db\Migration;

/**
 * Class m171114_150941_filters
 */
class m171114_150941_filters extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()  
        {
             $this->createTable('{{%filters}}', [
            'id' => $this->primaryKey(11),
            'parent_id' => $this->integer(11)->notNull(),
            'name' => $this->string(255)->notNull(),
            'positions' => $this->integer(11),       
            ]);
        // $this->addForeignKey('category_fk', '{{%category}}', 'parent_id', '{{%category}}', 'id', 'CASCADE');
        }
    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171114_150941_filters cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171114_150941_filters cannot be reverted.\n";

        return false;
    }
    */
}
