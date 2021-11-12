<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "my_history".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $body
 * @property string|null $date
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class MyHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'my_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['date', 'created_at', 'updated_at'], 'safe'],
            [['title', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'body' => 'Body',
            'date' => 'Date',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert))
        {
            $this->date = date('Y.m.d', strtotime($this->date));
            return true;
        }else
        {
            return false;
        }
    }
}
