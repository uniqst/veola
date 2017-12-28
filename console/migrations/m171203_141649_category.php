<?php

use yii\db\Migration;

/**
 * Class m171203_141649_category
 */
class m171203_141649_category extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(11),
            'img' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'position' => $this->integer(11),
            'description' => $this->getDb()->getSchema()->createColumnSchemaBuilder('LONGTEXT'),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171203_141649_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171203_141649_category cannot be reverted.\n";

        return false;
    }
    */
}
