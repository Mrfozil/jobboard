<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $company \frontend\models\SignupForm */

use common\models\City;
use common\models\Region;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if (Yii::$app->session->hasFlash('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?= Yii::$app->session->getFlash('success') ?>
                    </div>
                <?php endif; ?>
                <?php if (Yii::$app->session->hasFlash('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?= Yii::$app->session->getFlash('error') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-5">
                <h2 class="mb-4"><?= Yii::t('app', 'Edit company informations')?></h2>
                <?php $form = ActiveForm::begin([
                    'id' => 'form-signup',
                    'options' => [
                        'class' => 'p-4 border rounded',
                        'enctype' => 'multipart/form-data'
                    ]
                ]); ?>
                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <?= $form->field($company, 'name')->textInput() ?>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <?= $form->field($company, 'director_name')->textInput() ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <?= $form->field($company, 'regionId')->dropDownList(
                            Region::selectList(),
                            [
                                'prompt' => 'Viloyatni tanlang...',
                            ]
                        ); ?>
                    </div>

                    <div class="col-md-6 mb-3 mb-md-0">
                        <?= $form->field($company, 'cityId')->dropDownList(
                            City::selectList(),
                            [
                                'prompt' => 'Tumanni tanlang...',
                            ]
                        ); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <?= $form->field($company, 'address')->textInput() ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <?= $form->field($company, 'phone')->widget(\yii\widgets\MaskedInput::class, [
                            'mask' => '+\9\98-99-999-9999',
                        ]) ?>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <?= $form->field($company, 'imgLogo')->fileInput() ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <?= Html::submitButton(Yii::t('app', 'Edit'), ['class' => 'btn px-4 btn-primary text-white btn-block', 'name' => 'signup-button']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
