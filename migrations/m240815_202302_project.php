<?php

use yii\db\Migration;

/**
 * Class m240815_202302_project
 */
class m240815_202302_project extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey()->unsigned(),
            'title' => $this->string(100)->notNull(),
            'description'=>$this->string(225)->notNull()

        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240815_202302_project cannot be reverted.\n";

        return false;
    }
    */
}
