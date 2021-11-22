<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$name = 'name_' . Yii::$app->language;

echo "<h3>Worker resume</h3>";



?>

<table>
    <tr>
        <td><?= Html::img('@web/'.$model->photo) ?></td>
        <td>
            <h2><?= $model->firstname . ' ' . $model->lastname; ?></h2>
            <table>
                <tr>
                    <td style="color: #0a73bb;"><?= Yii::t('app', 'Birthdate:') ?></td>
                    <td class="oq"><?= $model->birthdate ?></td>
                </tr>
                <tr>
                    <td><?= Yii::t('app', 'Address:') ?></td>
                    <td><?= $model->address ?></td>
                </tr>
                <tr>
                    <td><?= Yii::t('app', 'Phone:') ?></td>
                    <td><?= $model->phone ?></td>
                </tr>
                <tr>
                    <td><?= Yii::t('app', 'Nationality:') ?></td>
                    <td><?= $model->nationality->name ?></td>
                </tr>
                <tr>
                    <td><?= Yii::t('app', 'Gender:') ?></td>
                    <td><?= $model->gender ? $model->gender = 1 ? 'Erkak' : 'Ayol' : 'Belgilanmagan' ?></td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<div class="row">
    <div class="col-sm-12">
        <h3><?= Yii::t('app', 'Labor activity:') ?></h3>
    </div>
    <hr>
    <div class="col-sm-12">
        <table>
            <?php
            if($model->laborActivity) {
                $i = 1;
                foreach ($model->laborActivity as $worker_labor_activity){
                    if($worker_labor_activity){
                        $labors .= '<tr><td>' . $i . ') ' . $worker_labor_activity->from_date . ' - ' . $worker_labor_activity->to_date . '<td>';
                        $labors .= '<td><b>Korxona nomi:</b>' . $worker_labor_activity->company_name . ' <b>Lavozimi: </b>' . $worker_labor_activity->position . '<td><tr>';
                    }
                    $i++;
                }
            }
            if (isset($labors)){
                echo $labors;
            }
            ?>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <h3><?= Yii::t('app', 'Languages:') ?></h3>
    </div>
    <hr>
    <div class="col-sm-12">
        <table>
            <?php
            if($model->languages and count($model->languages) > 0) {
                $i = 1;
                $langs = '';
                foreach ($model->languages as $lang){
                    if($lang){
                        $langs .= '<tr><td>' . $i . ') ' . $lang->language->$name . ' tili <td>';
                        $langs .= '<td><b>Bilish darajasi:</b>' . $lang->rate . " <b>Qo'shimcha: </b>" . $lang->other_lang . '<td><tr>';
                    }
                    $i++;
                }
            }
            echo $langs;
            ?>
        </table>
    </div>
</div>