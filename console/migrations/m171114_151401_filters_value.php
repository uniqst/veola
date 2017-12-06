<?php

use yii\db\Migration;

/**
 * Class m171114_151401_filter_options
 */
class m171114_151401_filters_value extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%filters_value}}', [
            'id' => $this->primaryKey(11),
            'product_id' => $this->integer(11)->notNull(),
            'filter_id' => $this->integer(11)->notNull(),
            'value' => $this->integer(11)->notNull(),
            ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171114_151401_filter_options cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171114_151401_filter_options cannot be reverted.\n";

        return false;
    }
    */
}
