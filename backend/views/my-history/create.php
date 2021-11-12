<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MyHistory */

$this->title = 'Create My History';
$this->params['breadcrumbs'][] = ['label' => 'My Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
