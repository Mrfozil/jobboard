<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%city}}`.
 */
class m210923_060015_add_name_uz_column_name_ru_name_en_column_column_to_city_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('{{%city}}', 'name', 'name_cyrl');
        $this->addColumn('{{%city}}', 'name_uz', $this->string());
        $this->addColumn('{{%city}}', 'name_ru', $this->string());
        $this->addColumn('{{%city}}', 'name_en', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%city}}', 'name_uz');
        $this->dropColumn('{{%city}}', 'name_ru');
        $this->dropColumn('{{%city}}', 'name_en');
    }
}
