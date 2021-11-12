<?php

use yii\helpers\Html;

?>

<a href="/my-history/export" class="btn btn-primary">Export</a>

<?php foreach ($data as $item): ?>
    <?php $sheet[] = $item ?>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title"><a href="/my-history/show?id=<?= $item->id ?>"><?= $item->title ?></a></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $item->date ?></h6>
            <p class="card-text"><?= $item->description ?></p>
            <?php

            echo Html::a('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/>
</svg> Hisobot', ['/my-history/report?id='.$item->id], [
                'class'=>'btn btn-primary',
                'target'=>'_blank',
                'data-toggle'=>'tooltip',
                'title'=>'Natijani PDF qilish'
            ]);
            ?>
        </div>
    </div>

<?php endforeach ?>

