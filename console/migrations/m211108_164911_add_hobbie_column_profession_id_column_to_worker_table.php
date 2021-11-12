<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%worker}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%profession}}`
 */
class m211108_164911_add_hobbie_column_profession_id_column_to_worker_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%worker}}', 'hobbie', $this->string());
        $this->addColumn('{{%worker}}', 'profession_id', $this->integer());

        // creates index for column `profession_id`
        $this->createIndex(
            '{{%idx-worker-profession_id}}',
            '{{%worker}}',
            'profession_id'
        );

        // add foreign key for table `{{%profession}}`
        $this->addForeignKey(
            '{{%fk-worker-profession_id}}',
            '{{%worker}}',
            'profession_id',
            '{{%profession}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%profession}}`
        $this->dropForeignKey(
            '{{%fk-worker-profession_id}}',
            '{{%worker}}'
        );

        // drops index for column `profession_id`
        $this->dropIndex(
            '{{%idx-worker-profession_id}}',
            '{{%worker}}'
        );

        $this->dropColumn('{{%worker}}', 'hobbie');
        $this->dropColumn('{{%worker}}', 'profession_id');
    }
}
