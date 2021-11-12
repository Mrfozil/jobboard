<?php

use yii\bootstrap4\Nav;
use yii\helpers\Html;
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?= Yii::$app->user->identity->username; ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
                <?php

                $menuItems = [
                    [
                        'label' => Html::tag('i', '', ['class'=>'nav-icon fas fa-table']).' Viloyatlar',
                        'url' => ['/region/index'],
                    ],
                    [
                        'label' => Html::tag('i', '', ['class'=>'nav-icon fas fa-table']).' Tuman/Shahar',
                        'url' => ['/city/index']
                    ],
                    [
                        'label' => Html::tag('i', '', ['class'=>'nav-icon fas fa-table']).'Mening tarixim',
                        'url' => ['/my-history/index']
                    ],
                    [
                        'label' => Html::tag('i', '', ['class'=>'nav-icon fas fa-table']).'Tillar',
                        'url' => ['/lang/index']
                    ],
                    [
                        'label' => Html::tag('i', '', ['class'=>'nav-icon fas fa-table']).'Hamkorlar',
                        'url' => ['/partners/index']
                    ],
                    [
                        'label' => Html::tag('i', '', ['class'=>'nav-icon fas fa-table']).'Murojaatlar',
                        'url' => ['/appeals/index']
                    ],
                    [
                        'label' => Html::tag('i', '', ['class'=>'nav-icon fas fa-table']).'Ishchilar',
                        'url' => ['/worker/index']
                    ],
                    [
                        'label' => Html::tag('i', '', ['class'=>'nav-icon fas fa-table']).'Millati',
                        'url' => ['/nationality/index']
                    ],

                ];

                if (!Yii::$app->user->isGuest)
                {
                    $menuItems[] = '<li>'
                        . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                        . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>';
                }
                echo Nav::widget([
                        'encodeLabels' => false,
                        'options' => ['class' => 'nav nav-pills nav-sidebar flex-column'],
                        'items' => $menuItems,
                    ]);

                ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>