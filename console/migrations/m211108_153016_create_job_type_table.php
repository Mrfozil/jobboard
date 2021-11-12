<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%job_type}}`.
 */
class m211108_153016_create_job_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%job_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%job_type}}');
    }
}
