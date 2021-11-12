<?php

use frontend\models\City;
use frontend\models\Region;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */

$this->title = "Ma'lumotlaringiz";
$this->params['breadcrumbs'][] = ['label' => 'Profil', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
            'email:email',
//            'status',
//            'created_at',
//            'updated_at',
//            'verification_token',
            [
                'attribute' => 'regionId',
                'value'=> Region::findOne(['id' => $model->regionId])->name,
            ],
            [
                'attribute' => 'cityId',
                'value'=> City::findOne(['id' => $model->cityId])->name,
            ],
            [
                'attribute'=>'image',
                'value'=> Yii::$app->homeUrl . $model->image,
                'format' => ['image',['width'=>'200']],
            ],
        ],
    ]) ?>

    <p class="text-right">
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
