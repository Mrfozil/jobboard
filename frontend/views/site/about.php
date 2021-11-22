<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('/jobboard/images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-white font-weight-bold"><?= $this->title = 'About'; ?></h1>
                <div class="custom-breadcrumbs">
                    <a href="/">Home</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong><?= $this->title = 'About'; ?></strong></span>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="site-about">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>This is the About page. You may modify the following file to customize its content:</p>

        <code><?= __FILE__ ?></code>
    </div>
</div>