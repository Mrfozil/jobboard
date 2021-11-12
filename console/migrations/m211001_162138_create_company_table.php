<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%company}}`.
 */
class m211001_162138_create_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%company}}', [
            'id' => $this->primaryKey(),
            'userId' => $this->integer()->notNull(),
            'name' => $this->string(255)->notNull(),
            'director_name' => $this->string(255)->notNull(),
            'regionId' => $this->integer()->notNull(),
            'cityId' => $this->integer()->notNull(),
            'address' => $this->string(255)->notNull(),
            'phone' => $this->string(13)->notNull(),
            'logo' => $this->string(255)->notNull(),
            'status' => $this->integer()->defaultValue(1),
            'date' => $this->date(),
            'created_at' => $this->timestamp()->defaultExpression('NOW()'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE NOW()'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%company}}');
    }
}
