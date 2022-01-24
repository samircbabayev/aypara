<?php

use yii\helpers\Url;

$this->title = 'Əsas';
?>

<?php if (@$middle_watched_news) : ?>
    <!-- *** LAST NEWS CAROUSEL *** -->
    <section class="last__news-carousel">
        <div class="container">
            <div class="last_news_carousel owl-carousel owl-theme">
                <?php $i = 0;
                foreach ($middle_watched_news as $news) : ?>
                    <?php if ($i == 7) break; ?>
                    <div class="item">
                        <a href="<?= Url::to(['/news/index', 'id' => $news->id]) ?>" class="title">
                            <?= substr(empty($news->title) ? '' :  $news->title, 0, 80) ?>...
                        </a>
                        <p> <?= $news->org_created_at ?></p>

                        <img src="<?= @$news->image ?>" alt="">
                    </div>
                <?php $i++;
                endforeach; ?>
            </div>
        </div>
    </section>
    <!-- *** LAST NEWS CAROUSEL END *** -->
<?php endif; ?>

<?php if (@$most_watched_news) : ?>
    <!-- *** MAIN NEWS CAROUSEL     *** -->
    <section class="main__news-carousel">
        <div class="container">
            <div class="main__news-carousel-inner">
                <div class="addvert">
                    <img src="img/bakcell_logo 1.png" alt="">
                </div>
                <div class="main_news_carousel owl-carousel owl-theme">
                    <?php $i = 0;
                    foreach ($most_watched_news as $news) : ?>
                        <?php if ($i == 7) break; ?>
                        <div class="item">
                            <img src="<?= @$news->image ?>" alt="">
                            <a href="<?= Url::to(['/news/index', 'id' => $news->id]) ?>" class="title"> <?= @$news->title ?></a>
                        </div>
                    <?php $i++;
                    endforeach; ?>
                </div>
                <div class="addvert">
                    <img src="img/bakcell_logo 1.png" alt="">
                </div>
            </div>

        </div>
    </section>
    <!-- *** MAIN NEWS CAROUSEL END *** -->
<?php endif; ?>

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