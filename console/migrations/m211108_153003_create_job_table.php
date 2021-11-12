<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%job}}`.
 */
class m211108_153003_create_job_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%job}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'email' => $this->string(),
            'job_title' => $this->string(),
            'location' => $this->string(),
            'regionId' => $this->integer(),
            'job_typeId' => $this->integer(),
            'job_desc' => $this->text(),
            'company' => $this->string(),
            'tagline' => $this->string(),
            'company_desc' => $this->text(),
            'web_site' => $this->string(),
            'telegram_username' => $this->string(),
            'logo' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%job}}');
    }
}
