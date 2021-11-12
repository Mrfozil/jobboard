<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VacancySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Vacancies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Vacancy'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            // [
            //     'attribute' => 'company_id',
            //     'value' => function($model){
            //         return $model->company ? $model->company->name : null;
            //     }
            // ],
//            'user_id',
            [
                'attribute' => 'profession_id',
                'value' => function($model){
                    return $model->profession ? $model->profession->name_uz : null;
                }
            ],
//            'description_uz:html',
            //'description_ru:ntext',
            //'description_en:ntext',
            //'description_oz:ntext',
            //'job_type_id',
            //'region_id',
            //'city_id',
            //'image',
            //'count_vacancy',
            //'salary',
            //'gender',
            //'experience',
            //'telegram',
            //'address',
            //'views',
            //'status',
            //'deadline',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>