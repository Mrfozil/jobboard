<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>
<?php if( $orders_count > 0): ?>
    <audio src="/audio/mixkit-positive-notification-951.wav" autoplay></audio>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">You have orders!</h4>
        <p>
            <a href="/dashboard/orders">Now you have <span  class="badge badge-success"><?= $orders_count ?></span> vacancy orders</a>
        </p>

    </div>
<?php endif; ?>

<?php
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'name',
        'director_name',
        [
            'attribute' => 'regionId',
            'value' => $model->region->name_oz
        ],
        [
            'attribute' => 'cityId',
            'value' => $model->city->name_oz
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