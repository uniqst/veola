<?php

use yii\db\Migration;

/**
 * Class m171228_224427_mainveola
 */
class m171228_224427_mainveola extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%mainveola}}', [
            'id' => $this->primaryKey(11),
            'title' => $this->string(255)->notNull(),
            'content' => $this->getDb()->getSchema()->createColumnSchemaBuilder('LONGTEXT')->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171228_224427_mainveola cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171228_224427_mainveola cannot be reverted.\n";

        return false;
    }
    */
}
