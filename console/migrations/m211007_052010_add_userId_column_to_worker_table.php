<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%worker}}`.
 */
class m211007_052010_add_userId_column_to_worker_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%worker}}', 'userId', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%worker}}', 'userId');
    }
}
