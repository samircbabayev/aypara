<?php

use yii\widgets\LinkPager;
?>
<section class="category__main">
  <div class="container">
    <div class="category__main-inner">
      <h1>Son Xəbərlər</h1>
      <div class="news">
        <?php
        foreach ($news as $new) : ?>
          <div class="news__single">
            <a href="#" class="title"><?= substr(empty($new->title) ? '' :  $new->title, 0, 75) ?>...</a>
            <p><?= $new->org_created_at ?></p>
            <a href="#"> <img src="<?= $new->image ?>" alt=""></a>
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