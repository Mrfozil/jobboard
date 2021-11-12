<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use \yii\web\YiiAsset;


?>

<?php
echo Nav::widget([
    'items' => [
        [
            'label' => Yii::t('app', 'Profile'),
            'url' => ['dashboard/index'],
        ],
        [
            'label' => Yii::t('app', 'Appeals'),
            'url' => ['dashboard/appeals'],
        ],
        [
            'label' => Yii::t('app', 'Add a vacancy'),
            'url' => ['vacancy/create'],
        ],

        [
            'label' => Yii::t('app', 'Vacancies'),
            'url' => ['vacancy/index'],
        ],
        [
            'label' => Yii::t('app', 'Logout') . ' (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ]

    ],
    'options' => ['class' =>'nav-pills flex-column'], // set this to nav-tab to get tab-styled navigation
]);
?>