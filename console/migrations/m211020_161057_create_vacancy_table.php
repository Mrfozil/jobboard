<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vacancy}}`.
 */
class m211020_161057_create_vacancy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vacancy}}', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'profession_id' =>$this->integer()->notNull(),
            'description_en' => $this->string(),
            'description_ru' => $this->string(),
            'description_uz' => $this->string(),
            'job_type_id' => $this->integer()->Null(),
            'region_id' => $this->integer(),
            'city_id' => $this->integer(),
            'image' => $this->string()->Null(),
            'count_vacancy' => $this->integer()->notNull(),
            'salary' => $this->decimal()->defaultValue(0),
            'gender' => $this->integer()->defaultValue(0),
            'experience' => $this->integer()->default(0),
            'telegram' => $this->string(),
            'address' => $this->string(),
            'views' => $this->integer(),
            'status' => $this->integer(),
            'deadline' => $this->date(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vacancy}}');
    }
}
