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
                        <img src="<?= @$news->image ?>" alt="">
                        <a href="<?= Url::to(['/news/index', 'id' => $news->id]) ?>" class="link__inner"></a>
                        <h2><?= @$news->title ?></h2>
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
                <a href="https://www.vektoruniforma.com" target="_blank" class="addvert">
                    <img src="img/vektorsafetybanner.jpg" alt="Vektor Safety">
                </a>
                <div class="main_news_carousel owl-carousel owl-theme">
                    <?php $i = 0;
                    foreach ($most_watched_news as $news) : ?>
                        <?php if ($i == 7) break; ?>
                        <div class="item">
                            <img src="<?= @$news->image ?>" alt="">
                            <a href="<?= Url::to(['/news/index', 'id' => $news->id]) ?><?= Url::to(['/news/index', 'id' => $news->id]) ?>" class="title"> <?= @$news->title ?></a>
                        </div>
                    <?php $i++;
                    endforeach; ?>
                </div>
                <a href="https://www.bakcell.com/az" target="_blank" class="addvert">
                    <img src="img/bakcell_addvert.jpg" alt="Bakcell">
                </a>
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
                <a href="<?= Url::to(['/categories/last-news']) ?>" class="">Son Xəbərlər</a>
            </div>
        </div>
    </section>
    <!-- *** LAST NEWS END *** -->
<?php endif; ?>