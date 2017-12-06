<?php

use yii\db\Migration;

/**
 * Class m171106_124727_category
 */
class m171106_124727_category extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
            $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(11),
            'parent_id' => $this->integer(11)->notNull(),
            'name' => $this->string(255)->notNull(),
            
        ]);
        $this->createIndex('parent_id', '{{%category}}', 'parent_id');
        // $this->addForeignKey('category_fk', '{{%category}}', 'parent_id', '{{%category}}', 'id', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171106_124727_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171106_124727_category cannot be reverted.\n";

        return false;
    }
    */
}
