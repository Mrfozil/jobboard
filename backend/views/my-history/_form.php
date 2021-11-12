<?php

use yii\helpers\Html;
use kartik\date\DatePicker;
use yii\widgets\ActiveForm;
use kartik\editors\Summernote;

/* @var $this yii\web\View */
/* @var $model backend\models\MyHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="my-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date', ['inputOptions' => [
        'autocomplete' => 'off']])->widget(
        DatePicker::className(), [
        'value' => date('dd-mm-yyyy', strtotime('+2 days')),
        'pluginOptions' => [
            'format' => 'dd-mm-yyyy',
            'todayHighlight' => true,
        ],
    ]);?>


    <?= $form->field($model, 'body')->widget(Summernote::class, [
        'useKrajeeStyle' => true,
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
