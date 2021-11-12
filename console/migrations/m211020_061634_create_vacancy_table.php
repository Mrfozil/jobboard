<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vacancy}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%company}}`
 * - `{{%user}}`
 * - `{{%profession}}`
 * - `{{%region}}`
 * - `{{%city}}`
 */
class m211020_061634_create_vacancy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vacancy}}', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'profession_id' => $this->integer()->notNull(),
            'description_uz' => $this->text(),
            'description_ru' => $this->text(),
            'description_en' => $this->text(),
            'description_oz' => $this->text(),
            'job_type_id' => $this->integer()->notNull(),
            'region_id' => $this->integer()->notNull(),
            'city_id' => $this->integer()->notNull(),
            'image' => $this->string(),
            'count_vacancy' => $this->integer()->notNull(),
            'salary' => $this->decimal(20,2)->defaultValue(0),
            'gender' => $this->integer()->defaultValue(0),
            'experience' => $this->integer(),
            'telegram' => $this->string(),
            'address' => $this->string(),
            'views' => $this->integer()->defaultValue(0),
            'status' => $this->integer()->defaultValue(1),
            'deadline' => $this->date(),
            'created_at' => $this->timestamp()->defaultExpression('NOW()'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE NOW()'),
        ]);

        // creates index for column `company_id`
        $this->createIndex(
            '{{%idx-vacancy-company_id}}',
            '{{%vacancy}}',
            'company_id'
        );

        // add foreign key for table `{{%company}}`
        $this->addForeignKey(
            '{{%fk-vacancy-company_id}}',
            '{{%vacancy}}',
            'company_id',
            '{{%company}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-vacancy-user_id}}',
            '{{%vacancy}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-vacancy-user_id}}',
            '{{%vacancy}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `profession_id`
        $this->createIndex(
            '{{%idx-vacancy-profession_id}}',
            '{{%vacancy}}',
            'profession_id'
        );

        // add foreign key for table `{{%profession}}`
        $this->addForeignKey(
            '{{%fk-vacancy-profession_id}}',
            '{{%vacancy}}',
            'profession_id',
            '{{%profession}}',
            'id',
            'CASCADE'
        );

        // creates index for column `region_id`
        $this->createIndex(
            '{{%idx-vacancy-region_id}}',
            '{{%vacancy}}',
            'region_id'
        );

        // add foreign key for table `{{%region}}`
        $this->addForeignKey(
            '{{%fk-vacancy-region_id}}',
            '{{%vacancy}}',
            'region_id',
            '{{%region}}',
            'id',
            'CASCADE'
        );

        // creates index for column `city_id`
        $this->createIndex(
            '{{%idx-vacancy-city_id}}',
            '{{%vacancy}}',
            'city_id'
        );

        // add foreign key for table `{{%city}}`
        $this->addForeignKey(
            '{{%fk-vacancy-city_id}}',
            '{{%vacancy}}',
            'city_id',
            '{{%city}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%company}}`
        $this->dropForeignKey(
            '{{%fk-vacancy-company_id}}',
            '{{%vacancy}}'
        );

        // drops index for column `company_id`
        $this->dropIndex(
            '{{%idx-vacancy-company_id}}',
            '{{%vacancy}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-vacancy-user_id}}',
            '{{%vacancy}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-vacancy-user_id}}',
            '{{%vacancy}}'
        );

        // drops foreign key for table `{{%profession}}`
        $this->dropForeignKey(
            '{{%fk-vacancy-profession_id}}',
            '{{%vacancy}}'
        );

        // drops index for column `profession_id`
        $this->dropIndex(
            '{{%idx-vacancy-profession_id}}',
            '{{%vacancy}}'
        );

        // drops foreign key for table `{{%region}}`
        $this->dropForeignKey(
            '{{%fk-vacancy-region_id}}',
            '{{%vacancy}}'
        );

        // drops index for column `region_id`
        $this->dropIndex(
            '{{%idx-vacancy-region_id}}',
            '{{%vacancy}}'
        );

        // drops foreign key for table `{{%city}}`
        $this->dropForeignKey(
            '{{%fk-vacancy-city_id}}',
            '{{%vacancy}}'
        );

        // drops index for column `city_id`
        $this->dropIndex(
            '{{%idx-vacancy-city_id}}',
            '{{%vacancy}}'
        );

        $this->dropTable('{{%vacancy}}');
    }
}
