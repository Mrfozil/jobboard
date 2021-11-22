<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$name = 'name_' . Yii::$app->language;

echo "<h3>Worker ma'lumotlari</h3>";
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'firstname',
        'lastname',
        'patronymic',
        'birthdate',
        'gender',
        [
            'attribute' => 'nationality_id',
            'value' => $model->nationality->name
        ],
        [
            'attribute' => 'region_id',
            'value' => $model->region->$name
        ],
        [
            'attribute' => 'city_id',
            'value' => $model->city->$name
        ],
        'address',
        'phone',
        [
            'attribute' => 'photo',
            'value' => '@web/'.$model->photo,
            'format' => ['image',['width'=>'150']],
        ],
        'hobbie',
        [
            'attribute' => 'profession_id',
            'value' => function($model) use ($name) {
                return $model->profession ? $model->profession->$name : null;
            }
        ],
        [
                'label' => 'Languages',
                'value' => function($model) use ($name){
                    $know_langs = '';
                    if($model->languages) {
                        foreach ($model->languages as $worker_lang){
                            $temp = $worker_lang->language ? $worker_lang->language->$name . ' ' . $worker_lang->rate . ', ' : ' ';
                            $know_langs .= $temp . ' ';
                        }
                    }
                    return $know_langs;
                }
        ],
        [
            'label' => 'Labor Activity',
            'value' => function($model) use ($name){
                $know_labor_activity = '';
                if($model->laborActivity) {
                    foreach ($model->laborActivity as $worker_labor_activity){
                        $temp = $worker_labor_activity ? $worker_labor_activity->company_name . ' korxonasida ' . $worker_labor_activity->position . ' lavozimida ' . $worker_labor_activity->from_date . ' dan ' . $worker_labor_activity->to_date . ' gacha ' : ' ' ;
                        $know_labor_activity .= $temp . ' ';
                    }
                }
                return $know_labor_activity;
            }
        ],

        'created_at',
        'updated_at',
    ],
]);

?>


<?= Html::a( Yii::t('app', 'Edit'), '/dashboard/edit-worker', ['class' => 'btn btn-success px-5']) ?>