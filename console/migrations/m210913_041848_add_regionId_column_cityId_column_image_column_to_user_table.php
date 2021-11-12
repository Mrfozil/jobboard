<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m210913_041848_add_regionId_column_cityId_column_image_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'regionId', $this->integer());
        $this->addColumn('{{%user}}', 'cityId', $this->integer());
        $this->addColumn('{{%user}}', 'image', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'regionId');
        $this->dropColumn('{{%user}}', 'cityId');
        $this->dropColumn('{{%user}}', 'image');
    }
}
