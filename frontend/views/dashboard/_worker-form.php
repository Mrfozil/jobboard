<?php

use common\models\City;
use common\models\Nationality;
use common\models\Region;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\jui\DatePicker;
$citylist = [];


?>
<div class="row">
    <div class="col-lg-12 mb-5">

        <?php $form = ActiveForm::begin([
            'id' => 'form-signup',
            'options' => [
                'class' => 'p-4 border rounded',
                'enctype' => 'multipart/form-data'
            ]
        ]); ?>
        <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
                <?= $form->field($model, 'firstname')->textInput() ?>
            </div>
            <div class="col-md-6 mb-3 mb-md-0">
                <?= $form->field($model, 'lastname')->textInput() ?>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
                <?= $form->field($model, 'patronymic')->textInput() ?>
            </div>
            <div class="col-md-6 mb-3 mb-md-0">
                 <?= $form->field($model, 'birthdate')->textInput() ?>
              
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
                <?= $form->field($model, 'gender')->dropdownList([
                    1 => 'Erkak',
                    2 => 'Ayol',
                ],
                    [
                        'prompt' => 'Jinsni tanlang'
                    ]
                ) ?>
            </div>
            <div class="col-md-6 mb-3 mb-md-0">
                <?= $form->field($model, 'nationality_id')->dropdownList(
                    Nationality::selectList(),
                    [
                        'prompt' => 'Millatini tanlang',
                    ]
                ) ?>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
                <?= $form->field($model, 'regionId')->dropdownList(
                    Region::selectList(),
                    [
                        'prompt' => 'Viloyatni tanlash'
                    ]
                ); ?>
            </div>
            <div class="col-md-6 mb-3 mb-md-0">
                <?= $form->field($model, 'cityId')->dropdownList(
                    $citylist,

                    [
                        'prompt' => 'Tumanni tanlash',
                    ]
                ); ?>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
                <?= $form->field($model, 'address')->textInput() ?>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
                <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::class, [
                    'mask' => '+\9\98-99-999-9999',
                ]) ?>
            </div>
            <div class="col-md-6 mb-3 mb-md-0">
                <?= $form->field($model, 'photo_user')->fileInput() ?>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn px-4 btn-primary text-white btn-block', 'name' => 'signup-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>