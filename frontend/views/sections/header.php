<?php

use yii\bootstrap4\Nav;

?>

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

<!-- NAVBAR -->
<header class="site-navbar mt-3 bg-danger">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="site-logo col-6"><a href="/">JobBoard</a></div>

            <nav class="mx-auto site-navigation">
                <?php

                $menuItems = [
                    [
                        'label' => Yii::t('app', 'Home'),
                        'url' => ['/'],
                    ],
                    [
                        'label' => Yii::t('app', 'About'),
                        'url' => ['/site/about']
                    ],
                    [
                        'label' => Yii::t('app', 'Contact'),
                        'url' => ['/site/contact']
                    ]
                ];

                echo Nav::widget([
                    'encodeLabels' => false,
                    'options' => ['class' => 'site-menu js-clone-nav d-none d-xl-block ml-0 pl-0'],
                    'items' => $menuItems,
                ]);

                ?>
            </nav>

            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                <div class="ml-auto">

                    <?= \lajax\languagepicker\widgets\LanguagePicker::widget([
                        'itemTemplate' => '<a class="dropdown-item" href="{link}" title="{language}"><i id="{language}"></i>{name}</a>',
                        'activeItemTemplate' => '<button type="button" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {name}
                        </button>',
                        'parentTemplate' => '<div class="btn-group">{activeItem}<div class="dropdown-menu">{items}</div></div>',
                        'languageAsset' => 'lajax\languagepicker\bundles\LanguageLargeIconsAsset',      // StyleSheets
                        'languagePluginAsset' => 'lajax\languagepicker\bundles\LanguagePluginAsset',    // JavaScripts
                    ]); ?>

                    <a href="post-job.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
                    <?php if(Yii::$app->user->isGuest):?>
                        <a href="/site/login/" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
                    <?php else: ?>
                        <a href="/dashboard/" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Cabinet</a>
                    <?php endif; ?>
                </div>
                <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
            </div>

        </div>
    </div>
</header>

<!-- HOME -->
