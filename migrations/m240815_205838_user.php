<?php

use yii\db\Migration;

/**
 * Class m240815_205838_user
 */
class m240815_205838_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey()->unsigned(),
            'uid' => $this->string(60)->unique()->notNull(),
            'username' => $this->string(45)->notNull(),
            'name' => $this->string(50)->notNull(),
            'email' => $this->string(225)->unique()->notNull(),
            'password' => $this->string(60)->notNull(),
            'role' => $this->integer()->notNull()->defaultValue(1),
            'contact_phone' => $this->boolean()->notNull()->defaultValue(false),
            'created' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated' => $this->timestamp()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240815_205838_user cannot be reverted.\n";

        return false;
    }
    */
}
