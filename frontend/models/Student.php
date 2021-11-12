<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property int|null $age
 * @property string|null $gender
 * @property string|null $phone
 * @property string|null $photo
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */


    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['firstname', 'lastname'], 'string', 'max' => 25],
            [['gender'], 'string', 'max' => 10],
            [['phone'], 'string', 'max' => 13],
            [['photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'Rasm',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'age' => 'Age',
            'gender' => 'Gender',
            'phone' => 'Phone',
            'photo' => 'Photo',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->file->saveAs('uploads/' . $this->file->baseName . '.' . $this->file->extension);
            return true;
        } else {
            return false;
        }
    }
}
