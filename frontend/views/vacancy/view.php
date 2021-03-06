<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Vacancy */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vacancies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$name = 'name_' . Yii::$app->language;
\yii\web\YiiAsset::register($this);
?>
<div class="vacancy-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'company_id',
                'value' => function($model){
                    return $model->company ? $model->company->name : null;
                }
            ],
            'user_id',
            [
                'attribute' => 'profession_id',
                'value' => function($model) use ($name) {
                    return $model->profession ? $model->profession->$name : null;
                }
            ],
            'description_uz:html',
            'description_ru:html',
            'description_en:html',
            'description_oz:html',
            [
                'attribute' => 'job_type_id',
                'value' => function($model) use ($name) {
                    return $model->jobType ? $model->jobType->$name : null;
                }
            ],
            [
                'attribute' => 'region_id',
                'value' => function($model) use ($name) {
                    return $model->region ? $model->region->$name : null;
                }
            ],
            [
                'attribute' => 'city_id',
                'value' => function($model) use ($name) {
                    return $model->city ? $model->city->$name : null;
                }
            ],
            [
                'attribute'=>'image',
                'value'=> Yii::$app->homeUrl . $model->image,
                'format' => ['image',['width'=>'200']],
            ],
            'count_vacancy',
            'salary',
            'gender',
            'experience',
            'telegram',
            'address',
            'views',
            'status',
            'deadline',

            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>