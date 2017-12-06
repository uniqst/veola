<?php

use yii\db\Migration;

/**
 * Class m171119_160040_social_web
 */
class m171119_160040_social_web extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%social_web}}', [
            'id' => $this->primaryKey(11),
            'facebook' => $this->string(255), 
            'twitter' => $this->string(255),   
            'printerest' => $this->string(255),    
            'instagram' => $this->string(255),    
            'google_plus' => $this->string(255),  
            'linked_in' => $this->string(255),      
            'vk' => $this->string(255),      

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171119_160040_social_web cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171119_160040_social_web cannot be reverted.\n";

        return false;
    }
    */
}
