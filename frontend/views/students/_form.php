<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-6"><?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?></div>
        <div class="col-6"><?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?></div>
        <div class="col-6"><?= $form->field($model, 'age')->textInput() ?></div>
        <div class="col-6">
            <?= $form->field($model, 'gender')->dropDownList([
                'erkak' => 'Erkak',
                'ayol' => 'Ayol',
            ],
                [
                    'prompt' => 'Jinsni tanlang...'
                ]
            ) ?>
        </div>
        <div class="col-6"><?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?></div>
        <div class="col-6"><?= $form->field($model, 'file')->fileInput() ?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success', 'style' => 'padding: 10px 100px;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
