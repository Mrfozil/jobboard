<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property int $id
 * @property string|null $name
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_cyrl'], 'string', 'max' => 100],
            [['name_uz', 'name_en', 'name_ru', ], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_cyrl' => 'Name Cyrl',
            'name_uz' => 'Name UZB',
            'name_ru' => 'Name RUS',
            'name_en' => 'Name ENG',
        ];
    }

    public function getRegion()
    {
        return $this->hasOne(Region::class, ['id' => 'customer_id']);
    }
}