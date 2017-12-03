<?php

use yii\db\Migration;

/**
 * Class m171203_112152_slider
 */
class m171203_112152_slider extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%slider}}', [
            'id' => $this->primaryKey(11),
            'position' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'photo' => $this->string('255')->notNull(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171203_112152_slider cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171203_112152_slider cannot be reverted.\n";

        return false;
    }
    */
}
