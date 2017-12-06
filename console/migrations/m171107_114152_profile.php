<?php

use yii\db\Migration;

/**
 * Class m171107_114152_profile
 */
class m171107_114152_profile extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
         $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(255)->notNull(),
             'price_eur' => $this->integer(11),
             'price_try' => $this->integer(11),
             'price_usd' => $this->integer(11),
             'price_eur_two' => $this->integer(11),
             'price_try_two' => $this->integer(11),
             'price_usd_two' => $this->integer(11),
             'price_eur_three' => $this->integer(11),
             'price_try_three' => $this->integer(11),
             'price_usd_three' => $this->integer(11),
             'price_eur_four' => $this->integer(11),
             'price_try_four' => $this->integer(11),
             'price_usd_four' => $this->integer(11),
             'price_eur_night' => $this->integer(11),
             'price_try_night' => $this->integer(11),
             'price_usd_night' => $this->integer(11),
             'taxi_eur' => $this->integer(11),
             'taxi_try' => $this->integer(11),
             'taxi_usd' => $this->integer(11),
             'email' => $this->string(255)->notNull(),
            'phone' => $this->string(255)->notNull(),
            'nationality' => $this->string(255)->notNull(), 
            'age' => $this->integer(11)->notNull(),
            'height' => $this->string(255)->notNull(),
            'mesurements' => $this->string(255)->notNull(),
            'weight' => $this->string(255)->notNull(),
            'about_myself' => $this->string(255)->notNull(),
            'status' => $this->integer(11),
            'date' => $this->dateTime(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171107_114152_profile cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171107_114152_profile cannot be reverted.\n";

        return false;
    }
    */
}
