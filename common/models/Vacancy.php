<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "vacancy".
 *
 * @property int $id
 * @property int $company_id
 * @property int $user_id
 * @property int $profession_id
 * @property string|null $description_uz
 * @property string|null $description_ru
 * @property string|null $description_en
 * @property string|null $description_oz
 * @property int $job_type_id
 * @property int $region_id
 * @property int $city_id
 * @property string|null $image
 * @property int $count_vacancy
 * @property float|null $salary
 * @property int|null $gender
 * @property int|null $experience
 * @property string|null $telegram
 * @property string|null $address
 * @property int|null $views
 * @property int|null $status
 * @property string|null $deadline
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property City $city
 * @property Company $company
 * @property Profession $profession
 * @property Region $region
 * @property User $user
 */
class Vacancy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * {@inheritdoc}
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['company_id', 'user_id', 'profession_id', 'job_type_id', 'region_id', 'city_id', 'count_vacancy'], 'required'],
            [['company_id', 'user_id', 'profession_id', 'job_type_id', 'region_id', 'city_id', 'gender', 'experience', 'views', 'status'], 'integer'],
            [['description_uz', 'description_ru', 'description_en', 'description_oz'], 'string'],
            [['salary'], 'number'],
            [['count_vacancy'], 'integer', 'min' => 1],
            [['deadline', 'created_at', 'updated_at'], 'safe'],
            [['image', 'telegram', 'address'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'id']],
           // [['profession_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profession::className(), 'targetAttribute' => ['profession_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'company_id' => Yii::t('app', 'Company ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'profession_id' => Yii::t('app', 'Profession ID'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_en' => Yii::t('app', 'Description En'),
            'description_oz' => Yii::t('app', 'Description Oz'),
            'job_type_id' => Yii::t('app', 'Job Type ID'),
            'region_id' => Yii::t('app', 'Region ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'image' => Yii::t('app', 'Image'),
            'count_vacancy' => Yii::t('app', 'Count Vacancy'),
            'salary' => Yii::t('app', 'Salary'),
            'gender' => Yii::t('app', 'Gender'),
            'experience' => Yii::t('app', 'Experience'),
            'telegram' => Yii::t('app', 'Telegram'),
            'address' => Yii::t('app', 'Address'),
            'views' => Yii::t('app', 'Views'),
            'status' => Yii::t('app', 'Status'),
            'deadline' => Yii::t('app', 'Deadline'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    /**
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }

    /**
     * Gets query for [[Profession]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfession()
    {
        return $this->hasOne(Profession::className(), ['id' => 'profession_id']);
    }

    /**
     * Gets query for [[Region]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[JobType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJobType()
    {
        return $this->hasOne(JobType::className(), ['id' => 'job_type_id']);
    }

    public function upload()
    {
        $this->image = 'img/vacancy/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;

        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::getAlias('@frontend') . '/web/img/vacancy/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

}