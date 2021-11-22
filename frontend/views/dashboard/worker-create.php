<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use common\models\City;
use common\models\LaborActivity;
use common\models\Nationality;
use common\models\Region;
use common\models\WorkerLanguage;
use kartik\date\DatePicker;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;

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
            <div class="col-md-12">
                <h2 class="mb-4"><?= Yii::t('app', 'Create worker informations')?></h2>
            </div>
        </div>
        <?= $this->render('_form', [
            'model' => $model,
            'modelsLanguage' => (empty($modelsLanguage)) ? [new WorkerLanguage()] : $modelsLanguage,
            'modelsLaborActivity' => (empty($modelsLaborActivity)) ? [new LaborActivity()] : $modelsLaborActivity
        ])?>
    </div>
</div>