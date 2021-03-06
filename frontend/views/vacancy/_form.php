<?php

use common\models\City;
use common\models\JobType;
use common\models\Profession;
use common\models\Region;
use dosamigos\tinymce\TinyMce;
use kartik\select2\Select2;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Vacancy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vacancy-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'profession_id')->dropDownList(
                Profession::selectList(),
                [
                    'prompt' => 'Turini tanlang'
                ]
            ) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'job_type_id')->widget(Select2::classname(), [
                'data' => JobType::selectList(),
                'language' => 'ru',
                'options' => ['placeholder' => 'Yumish turi ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);

            ?>
        </div>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="descuz-tab" data-toggle="tab" href="#descuz" role="tab" aria-controls="descuz" aria-selected="true">O'zbekcha</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="descru-tab" data-toggle="tab" href="#descru" role="tab" aria-controls="descru" aria-selected="false">Руский</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="descen-tab" data-toggle="tab" href="#descen" role="tab" aria-controls="descen" aria-selected="false">English</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="descoz-tab" data-toggle="tab" href="#descoz" role="tab" aria-controls="descoz" aria-selected="false">Ўзбекча</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="descuz" role="tabpanel" aria-labelledby="descuz-tab">
            <?= $form->field($model, 'description_uz')->widget(TinyMce::className(), [
                'options' => ['rows' => 6],
                'language' => 'ru',
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste",
                        "save image imagetools textcolor fullscreen charmap"
                    ],
                    'toolbar' => "save | undo redo | code styleselect | fontselect fontsizeselect hilitecolor forecolor backcolor bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image imagetools media fullscreen charmap | redbtn defaultbuttons roundbuttons numscroller anchor",
                    'fontsize_formats' => '8pt 10pt 12pt 14pt 18pt 20pt 24pt 36pt',
                    'image_advtab' => true,
                    'image_class_list' => [
                        [
                            'value' => '',
                            'title' => 'None',
                        ],
                        [
                            'value' => 'img-circle img-no-padding img-responsive',
                            'title' => 'Circle',
                        ],
                        [
                            'value' => 'img-rounded img-responsive',
                            'title' => 'Rounded',
                        ],
                        [
                            'value' => 'img-thumbnail img-responsive',
                            'title' => 'Thumbnail',
                        ]
                    ],
                    'images_upload_url' => '/postAcceptor.php',
                    'plugin_prevqiew_width' => 1110,
                ]
            ]);?>
        </div>
        <div class="tab-pane fade" id="descru" role="tabpanel" aria-labelledby="descru-tab">
            <?= $form->field($model, 'description_ru')->widget(TinyMce::className(), [
                'options' => ['rows' => 6],
                'language' => 'ru',
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste",
                        "save image imagetools textcolor fullscreen charmap"
                    ],
                    'toolbar' => "save | undo redo | code styleselect | fontselect fontsizeselect hilitecolor forecolor backcolor bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image imagetools media fullscreen charmap | redbtn defaultbuttons roundbuttons numscroller anchor",
                    'fontsize_formats' => '8pt 10pt 12pt 14pt 18pt 20pt 24pt 36pt',
                    'image_advtab' => true,
                    'image_class_list' => [
                        [
                            'value' => '',
                            'title' => 'None',
                        ],
                        [
                            'value' => 'img-circle img-no-padding img-responsive',
                            'title' => 'Circle',
                        ],
                        [
                            'value' => 'img-rounded img-responsive',
                            'title' => 'Rounded',
                        ],
                        [
                            'value' => 'img-thumbnail img-responsive',
                            'title' => 'Thumbnail',
                        ]
                    ],
                    'images_upload_url' => '/postAcceptor.php',
                    'plugin_prevqiew_width' => 1110,
                ]
            ]);?>
        </div>
        <div class="tab-pane fade" id="descen" role="tabpanel" aria-labelledby="descen-tab">
            <?= $form->field($model, 'description_en')->widget(TinyMce::className(), [
                'options' => ['rows' => 6],
                'language' => 'ru',
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste",
                        "save image imagetools textcolor fullscreen charmap"
                    ],
                    'toolbar' => "save | undo redo | code styleselect | fontselect fontsizeselect hilitecolor forecolor backcolor bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image imagetools media fullscreen charmap | redbtn defaultbuttons roundbuttons numscroller anchor",
                    'fontsize_formats' => '8pt 10pt 12pt 14pt 18pt 20pt 24pt 36pt',
                    'image_advtab' => true,
                    'image_class_list' => [
                        [
                            'value' => '',
                            'title' => 'None',
                        ],
                        [
                            'value' => 'img-circle img-no-padding img-responsive',
                            'title' => 'Circle',
                        ],
                        [
                            'value' => 'img-rounded img-responsive',
                            'title' => 'Rounded',
                        ],
                        [
                            'value' => 'img-thumbnail img-responsive',
                            'title' => 'Thumbnail',
                        ]
                    ],
                    'images_upload_url' => '/postAcceptor.php',
                    'plugin_prevqiew_width' => 1110,
                ]
            ]);?>
        </div>
        <div class="tab-pane fade" id="descoz" role="tabpanel" aria-labelledby="descoz-tab">
            <?= $form->field($model, 'description_oz')->widget(TinyMce::className(), [
                'options' => ['rows' => 6],
                'language' => 'ru',
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste",
                        "save image imagetools textcolor fullscreen charmap"
                    ],
                    'toolbar' => "save | undo redo | code styleselect | fontselect fontsizeselect hilitecolor forecolor backcolor bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image imagetools media fullscreen charmap | redbtn defaultbuttons roundbuttons numscroller anchor",
                    'fontsize_formats' => '8pt 10pt 12pt 14pt 18pt 20pt 24pt 36pt',
                    'image_advtab' => true,
                    'image_class_list' => [
                        [
                            'value' => '',
                            'title' => 'None',
                        ],
                        [
                            'value' => 'img-circle img-no-padding img-responsive',
                            'title' => 'Circle',
                        ],
                        [
                            'value' => 'img-rounded img-responsive',
                            'title' => 'Rounded',
                        ],
                        [
                            'value' => 'img-thumbnail img-responsive',
                            'title' => 'Thumbnail',
                        ]
                    ],
                    'images_upload_url' => '/postAcceptor.php',
                    'plugin_prevqiew_width' => 1110,
                ]
            ]);?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'region_id')->widget(Select2::classname(), [
                'data' => Region::selectList(),
                'language' => 'ru',
                'options' => ['placeholder' => 'Viloyatni tanlang ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'city_id')->widget(Select2::classname(), [
                'data' => City::selectList(),
                'language' => 'ru',
                'options' => ['placeholder' => 'Tumanni tanlang ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'imageFile')->fileInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'count_vacancy')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'salary')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'gender')->dropDownList(
                [
                    1 => 'Erkak',
                    2 => 'Ayol'
                ],
                [
                    'prompt' => 'Jinsi ...'
                ]
            ) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'experience')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'status')->dropDownList(
            [
                1 => 'Active',
                2 => 'Inactive'
            ],
            [
                'prompt' => 'Status ...'
            ]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>