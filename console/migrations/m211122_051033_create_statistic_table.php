<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%statistic}}`.
 */
class m211122_051033_create_statistic_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%statistic}}', [
            'id' => $this->primaryKey(),
            'company_count' => $this->integer(),
            'vacancy_count' => $this->integer(),
            'user_count' => $this->integer(),
            'cv_count' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%statistic}}');
    }
}
