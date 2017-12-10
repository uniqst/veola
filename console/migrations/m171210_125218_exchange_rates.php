<?php

use yii\db\Migration;

/**
 * Class m171210_125218_exchange_rates
 */
class m171210_125218_exchange_rates extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%exchange_rates}}', [
            'id' => $this->primaryKey(11),
            'grn' => $this->float(11)->notNull(),
            'eur' => $this->float(11)->notNull(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171210_125218_exchange_rates cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171210_125218_exchange_rates cannot be reverted.\n";

        return false;
    }
    */
}
