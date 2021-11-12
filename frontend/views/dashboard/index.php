<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'name',
        'director_name',
        [
            'attribute' => 'regionId',
            'value' => $model->region->name_cyrl
        ],
        [
            'attribute' => 'cityId',
            'value' => $model->city->name_cyrl
        ],
        'address',
        'phone',
        [
            'attribute'=>'photo',
            'value'=> '@web/'.$model->logo,
            'format' => ['image',['width'=>'150','height'=>'150']],
        ],
    ],
]);

?>


<?= Html::a( Yii::t('app', 'Edit'), '/dashboard/edit', ['class' => 'btn btn-success px-5']) ?>

