<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "worker".
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $patronymic
 * @property string|null $birthdate
 * @property int|null $gender
 * @property int|null $nationality_id
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $photo
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Worker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worker';
    }


    public $username;
    public $password;
    public $email;
    public $photo_user;
    public $regionId;
    public $cityId;

    const SCENARIO_SIGNUP = 'signup';
    const SCENARIO_CREATE = 'create';

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birthdate', 'created_at', 'updated_at'], 'safe'],
            [['password', 'username', 'email'], 'required'],
            [['gender', 'nationality_id', 'userId', 'regionId', 'cityId'], 'integer'],
            [['firstname', 'lastname', 'patronymic', 'address', 'phone', 'photo'], 'string', 'max' => 255],
            [['photo_user'], 'file'],
        ];
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_SIGNUP => ['username', 'password', 'email'],
            self::SCENARIO_CREATE => [
                'firstname', 'lastname', 'patronymic', 'address', 'phone',
                'photo', 'photo_user', 'gender', 'nationality_id', 'userId',
                'regionId', 'cityId', 'birthdate'],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'firstname' => Yii::t('app', 'Firstname'),
            'lastname' => Yii::t('app', 'Lastname'),
            'patronymic' => Yii::t('app', 'Patronymic'),
            'birthdate' => Yii::t('app', 'Birthdate'),
            'gender' => Yii::t('app', 'Gender'),
            'nationality_id' => Yii::t('app', 'Nationality ID'),
            'address' => Yii::t('app', 'Address'),
            'phone' => Yii::t('app', 'Phone'),
            'photo' => Yii::t('app', 'Photo'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'username' => Yii::t('app', 'Username'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
        ];
    }

    public function upload()
    {
        $this->photo = 'img/worker/' . $this->photo_user->baseName . '.' . $this->photo_user->extension;

        if ($this->validate()) {
            $this->photo_user->saveAs(Yii::getAlias('@frontend') . '/web/img/worker/' . $this->photo_user->baseName . '.' . $this->photo_user->extension);
            return true;
        } else {
            return false;
        }
    }

    public function Nationality()
    {
        return ArrayHelper::map(Nationality::find()->all(), 'id', 'name');
    }
}
