<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%my_history}}`.
 */
class m210913_044834_create_my_history_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%my_history}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'description' => $this->string(255),
            'body' => $this->text(),
            'date' => $this->date(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%my_history}}');
    }
}
