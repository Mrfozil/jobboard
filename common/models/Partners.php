<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $logo
 * @property string|null $url
 * @property int|null $order
 * @property int|null $status
 * @property int|null $maxwidth
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * {@inheritdoc}
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['order', 'status', 'maxwidth'], 'integer'],
            [['name', 'logo', 'url'], 'string', 'max' => 255],
            [['imageFile'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'logo' => Yii::t('app', 'Logo'),
            'url' => Yii::t('app', 'Url'),
            'order' => Yii::t('app', 'Order'),
            'status' => Yii::t('app', 'Status'),
            'maxwidth' => Yii::t('app', 'Max-width: PX'),
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::getAlias('@frontend') . '/web/img/partners/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
