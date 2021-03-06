<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nationality}}`.
 */
class m211006_175240_create_nationality_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%nationality}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%nationality}}');
    }
}
