<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%city}}`.
 */
class m210913_041108_create_city_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%city}}', [
            'id' => $this->primaryKey(),
            'regionId' => $this->integer(11),
            'name' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%city}}');
    }
}
