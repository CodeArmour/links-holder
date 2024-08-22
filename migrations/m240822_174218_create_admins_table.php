<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%admins}}`.
 */
class m240822_174218_create_admins_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%admins}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'gmail' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%admins}}');
    }
}
