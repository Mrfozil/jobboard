<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property int|null $regionId
 * @property string|null $name_cyrl
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['regionId'], 'integer'],
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
            'regionId' => Yii::t('app', 'Region ID'),
            'name_cyrl' => Yii::t('app', 'Name Cyrl'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'name_en' => Yii::t('app', 'Name En'),
        ];
    }

    public function getRegions() //Regionni qaniqlash
    {
        return $this->hasOne(Region::className(), ['id' => 'regionId']);
    }

    public function Regions()
    {
        return ArrayHelper::map(Region::find()->all(), 'id', 'name_cyrl');
    }

    public static function selectList($regionId = null) {
        $name = 'name_' . Yii::$app->language;
        $codition = [];
        if ($regionId){
            $codition = ['regionId' => $regionId];
        }
        return ArrayHelper::map(self::find()->where($codition)->all(), 'id', Yii::t('app', $name));
    }
}
