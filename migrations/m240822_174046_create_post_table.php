<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m240822_174046_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'admin_id' => $this->integer()->notNull(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    
        
        $this->createIndex(
            '{{%idx-post-admin_id}}',
            '{{%post}}',
            'admin_id'
        );
    
        
        $this->addForeignKey(
            '{{%fk-post-admin_id}}',
            '{{%post}}',
            'admin_id',
            '{{%admins}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            '{{%fk-post-admin_id}}',
            '{{%post}}'
        );
    
        $this->dropIndex(
            '{{%idx-post-admin_id}}',
            '{{%post}}'
        );
    
        $this->dropTable('{{%post}}');
    }
}
