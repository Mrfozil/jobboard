<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        'languagepicker',
    ],
    'modules' => [
        'admn' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
            'mainLayout' => '@app/views/layouts/main.php',

            'menus' => [
                'assignment' => [
                    'label' => 'Grand Access UZ', // change label
                ],
//                'user' => null, // disable menu route
            ]
        ]
    ],
    'language' => 'en',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath' => __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'common/messages',
                ],
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'mirfozilm85@gmail.com',
                'password' => 'djnauijtvupqolnd',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],
        'languagepicker' => [
            'class' => 'lajax\languagepicker\Component',
            // List of available languages (icons only)
            'languages' => [
                'en' => 'English',
                'ru' => 'Русский',
                'uz' => 'O`zbek',
                'oz' => 'Ўзбекча'
            ],
        ],
        'request' => [
            'baseUrl'=>'',
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
            'authTimeout' => 60 * 10,
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
            'timeout' => 60 * 10,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'scriptUrl'=>'/site/edit.php',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],

    ],
    'params' => $params,

    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'ajax/*',
            'admn/*',
            'gii/*',
            'vacancy/list',
            'vacancy/single',
        ]
    ],
];