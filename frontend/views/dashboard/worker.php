<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'firstname',
        'lastname',
        'patronymic',
        'birthdate',
        'gender',
        'nationality_id',
        'region_id',
        'city_id',
        'address',
        'phone',
        [
            'attribute'=>'photo',
            'value'=> '@web/'.$model->photo,
            'format' => ['image',['width'=>'150','height'=>'150']],
        ],
        'created_at',
        'updated_at',
    ],
]);

?>


<?= Html::a( Yii::t('app', 'Edit'), '/dashboard/edit-worker', ['class' => 'btn btn-success px-5']) ?>

