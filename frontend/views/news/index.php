<?php

use yii\helpers\Url;

?>
<section class="single__new">
  <div class="container">
    <div class="single__new-inner">
      <div class="single__new-text">
        <h1 class="title"><?= @$news->title ?></h1>
        <p>
          <?= @$news->text ?>
        </p>
      </div>
      <div class="single__new-img">
        <img src=" <?= @$news->image ?>" alt="">
      </div>
    </div>
  </div>
</section>


<?php if (@$last_news) : ?>

  <!-- *** LAST NEWS     *** -->
  <section class="last__news">
    <div class="container">
      <div class="last__news-inner">
        <?php foreach ($last_news as $news) : ?>
          <a href="<?= Url::to(['/news/index', 'id' => $news->id]) ?>" class="item">
            <h4 class="title">
              <?= $news->title ?>
            </h4>
            <p> <?= $news->org_created_at ?></p>
            <p> <?= substr(empty($news->text) ? '' :  $news->text, 0, 350) ?>...
            </p>
          </a>
        <?php endforeach; ?>
      </div>
      <div class="last__news-link">
        <a href="#" class="">Son Xəbərlər</a>
      </div>
    </div>
  </section>
  <!-- *** LAST NEWS END *** -->
<?php endif; ?>