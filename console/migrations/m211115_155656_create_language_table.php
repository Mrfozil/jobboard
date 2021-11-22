<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%language}}`.
 */
class m211122_051739_create_language_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%language}}', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string()->notNull(),
            'name_ru' => $this->string()->notNull(),
            'name_en' => $this->string()->notNull(),
            'name_cyrl' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%language}}');
    }
}
