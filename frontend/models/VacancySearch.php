<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Vacancy;

/**
 * VacancySearch represents the model behind the search form of `common\models\Vacancy`.
 */
class VacancySearch extends Vacancy
{
    /**
     * {@inheritdoc}
     */

    public $from_salary;
    public $end_salary;

    public function rules()
    {
        return [
            [['id', 'company_id', 'user_id', 'profession_id', 'job_type_id', 'region_id', 'city_id', 'count_vacancy', 'gender', 'experience', 'views', 'status'], 'integer'],
            [['description_uz', 'description_ru', 'description_en', 'description_oz', 'image', 'telegram', 'address', 'deadline', 'created_at', 'updated_at', 'from_salary', 'end_salary'], 'safe'],
            [['salary'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Vacancy::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'company_id' => $this->company_id,
            'user_id' => $this->user_id,
            'profession_id' => $this->profession_id,
            'job_type_id' => $this->job_type_id,
            'region_id' => $this->region_id,
            'city_id' => $this->city_id,
            'count_vacancy' => $this->count_vacancy,
            'salary' => $this->salary,
            'gender' => $this->gender,
            'experience' => $this->experience,
            'views' => $this->views,
            'status' => $this->status,
            'deadline' => $this->deadline,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['between', 'salary', $this->from_salary ? $this->from_salary : 0, $this->end_salary])
            ->andFilterWhere(['like', 'description_uz', $this->description_uz])
            ->andFilterWhere(['like', 'description_ru', $this->description_ru])
            ->andFilterWhere(['like', 'description_en', $this->description_en])
            ->andFilterWhere(['like', 'description_oz', $this->description_oz])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'telegram', $this->telegram])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}