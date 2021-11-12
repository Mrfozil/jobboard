<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%region}}`.
 */
class m210923_055540_add_name_uz_column_name_ru_name_en_column_column_to_region_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('{{%region}}', 'name', 'name_cyrl');
        $this->addColumn('{{%region}}', 'name_uz', $this->string());
        $this->addColumn('{{%region}}', 'name_ru', $this->string());
        $this->addColumn('{{%region}}', 'name_en', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('{{%region}}', 'name_cyrl', 'name');
        $this->dropColumn('{{%region}}', 'name_uz');
        $this->dropColumn('{{%region}}', 'name_ru');
        $this->dropColumn('{{%region}}', 'name_en');
    }
}
