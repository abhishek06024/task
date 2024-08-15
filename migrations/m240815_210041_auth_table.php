<?php

use yii\db\Migration;

/**
 * Class m240815_210041_auth_table
 */
class m240815_210041_auth_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('auth', [
            'id' => $this->primaryKey()->unsigned(),
            'user_id' => $this->integer()->notNull()->unsigned(),
            'source' => $this->string()->notNull(),
            'source_id' => $this->string()->notNull(),
        ]);

        $this->addForeignKey('fk_auth_user_id_user', 'auth', 'user_id', 'user', 'id', 'restrict', 'cascade');
  
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
        $this->dropForeignKey('fk_auth_user_id_user', 'auth');
        $this->dropTable('auth');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240815_210041_auth_table cannot be reverted.\n";

        return false;
    }
    */
}
