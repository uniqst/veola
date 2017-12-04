<?php

use yii\db\Migration;

/**
 * Class m171204_151400_card
 */
class m171204_151400_cart extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%cart}}', [
            'id' => $this->primaryKey(11),
            'qty' => $this->integer(11)->notNull(),
            'name' => $this->string(255)->notNull(),
            'price' => $this->float(11)->notNull(),
            'img' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171204_151400_card cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171204_151400_card cannot be reverted.\n";

        return false;
    }
    */
}
