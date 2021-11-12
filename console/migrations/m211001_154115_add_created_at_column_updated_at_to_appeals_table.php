<?php

use yii\db\Migration;

/**
 * Class m211001_154115_add_created_at_column_updated_at_to_appeals_table
 */
class m211001_154115_add_created_at_column_updated_at_to_appeals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211001_154115_add_created_at_column_updated_at_to_appeals_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211001_154115_add_created_at_column_updated_at_to_appeals_table cannot be reverted.\n";

        return false;
    }
    */
}
