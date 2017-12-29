<?php

use yii\db\Migration;

/**
 * Class m171227_172424_pages
 */
class m171227_172424_pages extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%pages}}', [
            'id' => $this->primaryKey(11),
            'title' => $this->string(255)->notNull(),
            'alias' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'H1' => $this->string(255)->notNull(),
            'content' => $this->getDb()->getSchema()->createColumnSchemaBuilder('LONGTEXT')->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171227_172424_pages cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171227_172424_pages cannot be reverted.\n";

        return false;
    }
    */
}
