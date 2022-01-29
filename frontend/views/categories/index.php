<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = @$category->note;
?>
<section class="category__main">
  <div class="container">
    <div class="category__main-inner">
      <h1><?= @$category->note ?></h1>
      <div class="news">
        <?php
        foreach ($news as $new) : ?>
          <div class="news__single">
            <a href="<?= Url::to(['/news/index', 'id' => $new->id]) ?>" class="title"><?= substr(empty($new->title) ? '' :  $new->title, 0, 75) ?>...</a>
            <p><?= $new->org_created_at ?></p>
            <a href="<?= Url::to(['/news/index', 'id' => $new->id]) ?>"> <img src="<?= $new->image ?>" alt=""></a>
            <p> <?= substr(empty($new->text) ? '' :  $new->text, 0, 150) ?>...</p>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="pagination-holder">
        <?=
        LinkPager::widget([
          'pagination' => $pagination,
          'linkOptions' => ['class' => 'page-link'],
        ]);
        ?>
      </div>
    </div>
  </div>
</section>