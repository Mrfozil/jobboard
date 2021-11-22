<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <link rel="stylesheet" href="/jobboard/css/custom-bs.css">
        <link rel="stylesheet" href="/jobboard/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="/jobboard/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="/jobboard/fonts/icomoon/style.css">
        <link rel="stylesheet" href="/jobboard/fonts/line-icons/style.css">
        <link rel="stylesheet" href="/jobboard/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/jobboard/css/animate.min.css">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="/jobboard/css/style.css">

    </head>
    <body class="d-flex flex-column h-100" id="top">
    <?php $this->beginBody() ?>

    <?= Yii::$app->controller->renderPartial("//sections/header") ?>
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('/jobboard/images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">About Us</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>About Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 my-4">
                <h2><?= Yii::t('app', 'Personal cabinet company') ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <?= Yii::$app->controller->renderPartial("//sections/cabinet_sidebar") ?>
            </div>
            <div class="col-md-9">
                <?= $content ?>
            </div>
        </div>
    </div>

    <?= Yii::$app->controller->renderPartial("//sections/footer") ?>

    </div>

    <!-- SCRIPTS -->
    <script src="/jobboard/js/jquery.min.js"></script>
    <script src="/jobboard/js/bootstrap.bundle.min.js"></script>
    <script src="/jobboard/js/isotope.pkgd.min.js"></script>
    <script src="/jobboard/js/stickyfill.min.js"></script>
    <script src="/jobboard/js/jquery.fancybox.min.js"></script>
    <script src="/jobboard/js/jquery.easing.1.3.js"></script>

    <script src="/jobboard/js/jquery.waypoints.min.js"></script>
    <script src="/jobboard/js/jquery.animateNumber.min.js"></script>
    <script src="/jobboard/js/owl.carousel.min.js"></script>

    <script src="/jobboard/js/bootstrap-select.min.js"></script>

    <script src="/jobboard/js/custom.js"></script>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
