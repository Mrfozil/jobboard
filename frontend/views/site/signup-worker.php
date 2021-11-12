<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $worker \frontend\models\SignupForm */

use common\models\Region;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">

    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 mb-5">
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
                <div class="offset-lg-3 col-lg-6 mb-5">
                    <h2 class="mb-4"><?= Yii::t('app', 'Sign Up To JobBoard')?></h2>
                    <?php $form = ActiveForm::begin([
                        'id' => 'form-signup',
                        'options' => [
                            'class' => 'p-4 border rounded',
                            'enctype' => 'multipart/form-data'
                        ]
                    ]); ?>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <?= $form->field($worker, 'username')->textInput(['autofocus' => true]) ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <?= $form->field($worker, 'email') ?>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <?= $form->field($worker, 'password')->passwordInput() ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <?= Html::submitButton(Yii::t('app', 'Signup'), ['class' => 'btn px-4 btn-primary text-white btn-block', 'name' => 'signup-button']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </section>
</div>
