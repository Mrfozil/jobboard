<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "statistic".
 *
 * @property int $id
 * @property int|null $vacancyes
 * @property int|null $companyes
 * @property int|null $users
 * @property int|null $workers
 */
class Statistic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statistic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vacancyes', 'companyes', 'users', 'workers'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'vacancyes' => Yii::t('app', 'Vacancyes'),
            'companyes' => Yii::t('app', 'Companyes'),
            'users' => Yii::t('app', 'Users'),
            'workers' => Yii::t('app', 'Workers'),
        ];
    }
}
