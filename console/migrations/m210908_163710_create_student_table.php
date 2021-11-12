<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student}}`.
 */
class m210908_163710_create_student_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%student}}', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(25),
            'lastname' => $this->string(25),
            'age' => $this->integer(),
            'gender' => $this->string(10),
            'phone' => $this->string(13),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%student}}');
    }
}
