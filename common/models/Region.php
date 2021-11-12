<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "region".
 *
 * @property int $id
 * @property string|null $name_cyrl
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
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
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_cyrl' => Yii::t('app', 'Name Cyrl'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'name_en' => Yii::t('app', 'Name En'),
        ];
    }

    public static function selectList() {
        $name = 'name_' . Yii::$app->language;
        return ArrayHelper::map(Region::find()->all(), 'id', Yii::t('app', $name));
    }
}
