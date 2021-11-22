<?php

use common\models\City;
use common\models\Nationality;
use common\models\Profession;
use common\models\Region;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\jui\DatePicker;

$js = '
jQuery(".dynamicform_wrapper_language").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper_language .panel-title-language").each(function(index) {
        jQuery(this).html("Til: " + (index + 1))
    });
});
jQuery(".dynamicform_wrapper_language").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper_language .panel-title-language").each(function(index) {
        jQuery(this).html("Til: " + (index + 1))
    });
});
jQuery(".dynamicform_wrapper_labor").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper_labor .panel-title-labor").each(function(index) {
        jQuery(this).html("Ish: " + (index + 1))
    });
});
jQuery(".dynamicform_wrapper_labor").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper_labor .panel-title-labor").each(function(index) {
        jQuery(this).html("Ish: " + (index + 1))
    });
});
';

$this->registerJs($js);

?>
<div class="row">
    <div class="col-lg-12 mb-5">

        <?php $form = ActiveForm::begin([
//            'id' => 'form-signup',
            'id' => 'dynamic-form',
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
                <?= $form->field($model,'birthdate')->widget(
                    DatePicker::className(),
                    [
                        'options' => ['class' => 'form-control'],
                        'dateFormat' => 'dd.MM.yyyy',
                        'clientOptions' => [
                            'defaultDate' => date('dd.MM.YYYY'),

                        ]]) ?>

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
                    City::selectList(),
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
            <div class="col-md-6 mb-3 mb-md-0">
                <?= $form->field($model, 'hobbie')->textInput() ?>
            </div>
            <div class="col-md-6 mb-3 mb-md-0">
                <?= $form->field($model, 'profession_id')->dropDownList(
                    Profession::selectList(),
                    [
                        'prompt' => 'Sohangiz ...'
                    ]
                ) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Biladigan tillaringiz</h5>
                        <p class="card-text">
                            <?php DynamicFormWidget::begin([
                                'widgetContainer' => 'dynamicform_wrapper_language', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                                'widgetBody' => '.container-items-lang', // required: css class selector
                                'widgetItem' => '.item-lang', // required: css class
                                'limit' => 4, // the maximum times, an element can be cloned (default 999)
                                'min' => 0, // 0 or 1 (default 1)
                                'insertButton' => '.add-item-lang', // css class
                                'deleteButton' => '.remove-item-lang', // css class
                                'model' => $modelsLanguage[0],
                                'formId' => 'dynamic-form',
                                'formFields' => [
                                    'language_id',
                                    'rate',
                                ],
                            ]); ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Biladigan tillaringiz
                                        <button type="button" class="pull-right add-item-lang btn btn-success btn-xs"><i class="fa fa-plus"></i> Til qo'shish</button>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-body container-items-lang"><!-- widgetContainer -->
                                        <?php foreach ($modelsLanguage as $index => $modelLanguage): ?>
                                            <div class="item-lang panel panel-default"><!-- widgetBody -->
                                                <div class="panel-heading">
                                                    <span class="panel-title-language">Til: <?= ($index + 1) ?></span>
                                                    <button type="button" class="pull-right remove-item-lang btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="panel-body">
                                                    <?php
                                                    // necessary for update action.
                                                    if (!$modelLanguage->isNewRecord) {
                                                        echo Html::activeHiddenInput($modelLanguage, "[{$index}]id");
                                                    }
                                                    ?>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <?= $form->field($modelLanguage, "[{$index}]language_id")->dropdownList(
                                                                [
                                                                    1 => 'Uzbek',
                                                                    2 => 'Русский'
                                                                ]
                                                            ) ?>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <?= $form->field($modelLanguage, "[{$index}]rate")->dropdownList(
                                                                [
                                                                    1 => '1',
                                                                    2 => '2',
                                                                    3 => '3',
                                                                    4 => '4',
                                                                    5 => '5',
                                                                ]
                                                            ) ?>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <?= $form->field($modelLanguage, "[{$index}]other_lang")->textInput() ?>
                                                        </div>
                                                    </div><!-- end:row -->
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php DynamicFormWidget::end(); ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ish fa'oliyatingiz</h5>
                        <p class="card-text">
                            <?php DynamicFormWidget::begin([
                                'widgetContainer' => 'dynamicform_wrapper_labor', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                                'widgetBody' => '.container-items', // required: css class selector
                                'widgetItem' => '.item', // required: css class
                                'limit' => 4, // the maximum times, an element can be cloned (default 999)
                                'min' => 0, // 0 or 1 (default 1)
                                'insertButton' => '.add-item', // css class
                                'deleteButton' => '.remove-item', // css class
                                'model' => $modelsLaborActivity[0],
                                'formId' => 'dynamic-form',
                                'formFields' => [
                                    'company_name',
                                    'position',
                                    'from_date',
                                    'to_date',
                                ],
                            ]); ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Ish joyingiz
                                <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Ish joyi qo'shish</button>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body container-items"><!-- widgetContainer -->
                                <?php foreach ($modelsLaborActivity as $key => $modelLaborActivity): ?>
                                    <div class="item panel panel-default"><!-- widgetBody -->
                                        <div class="panel-heading">
                                            <span class="panel-title-labor">Ish: <?= ($key + 1) ?></span>
                                            <button type="button" class="pull-right remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="panel-body">
                                            <?php
                                            // necessary for update action.
                                            if (!$modelLaborActivity->isNewRecord) {
                                                echo Html::activeHiddenInput($modelLaborActivity, "[{$key}]id");
                                            }
                                            ?>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <?= $form->field($modelLaborActivity, "[{$key}]company_name")->textInput() ?>
                                                </div>
                                                <div class="col-sm-6">
                                                    <?= $form->field($modelLaborActivity, "[{$key}]position")->textInput() ?>
                                                </div>
                                                <div class="col-sm-6">
                                                    <?= $form->field($modelLaborActivity,"[{$key}]from_date")->widget(
                                                        DatePicker::className(),
                                                        [
                                                            'options' => ['class' => 'form-control'],
                                                            'dateFormat' => 'dd.MM.yyyy',
                                                            'clientOptions' => [
                                                                'defaultDate' => date('dd.MM.YYYY')
                                                            ]
                                                        ]) ?>
                                                </div>
                                                <div class="col-sm-6">
                                                    <?= $form->field($modelLaborActivity,"[{$key}]to_date")->widget(
                                                        DatePicker::className(),
                                                        [
                                                            'options' => ['class' => 'form-control'],
                                                            'dateFormat' => 'dd.MM.yyyy',
                                                            'clientOptions' => [
                                                                'defaultDate' => date('dd.MM.YYYY')
                                                            ]
                                                        ]) ?>
                                                </div>
                                                <hr>
                                            </div><!-- end:row -->
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php DynamicFormWidget::end(); ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => 'btn px-4 btn-primary text-white btn-block', 'name' => 'signup-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>