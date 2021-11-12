<?php

use yii\helpers\Html;
use Da\QrCode\QrCode;
?>

<div class="card mb-3">
    <div class="card-body">
        <p>
            <?php
                $qrCode = (new QrCode('http://yiidars.loc/my-history/show?id=' . $data->id))
                    ->setSize(100)
                    ->setMargin(5)
                    ->useForegroundColor(0, 0, 0);

                // now we can display the qrcode in many ways
                // saving the result to a file:

                $qrCode->writeFile(__DIR__ . '/code.png'); // writer defaults to PNG when none is specified

                // display directly to the browser
                header('Content-Type: '.$qrCode->getContentType());
                //echo $qrCode->writeString();
            ?>

            <?php
            // or even as data:uri url
            echo '<img src="' . $qrCode->writeDataUri() . '">';
            ?>
        </p>
        <h5 class="card-title"><a href="/my-history/show?id=<?= $data->id ?>"><?= $data->title ?></a></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data->date ?></h6>
        <p class="card-text"><?= $data->body ?></p>
        <?php

        echo Html::a('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/>
</svg> Hisobot', ['/my-history/report?id='.$data->id], [
            'class'=>'btn btn-primary',
            'target'=>'_blank',
            'data-toggle'=>'tooltip',
            'title'=>'Natijani PDF qilish'
        ]);
        ?>
    </div>
</div>