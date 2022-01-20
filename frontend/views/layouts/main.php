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
  <title><?= Html::encode($this->title) ?> | Aypara Post</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <?php $this->head() ?>
</head>

<body>
  <?php $this->beginBody() ?>

  <!-- *** HEADER *** -->
  <header class="header ">
    <div class="header__top">
      <div class="container">
        <div class="header__top-inner">
          <div class="header__burger">
            <span></span>
          </div>
          <div class="header__categories">
            <a class="news__category_link active" href="#">Əsas Xəbərlər</a>
            <a class="news__category_link" href="#">Son Xəbərlər</a>
            <a class="news__category_link" href="#">Siyasət</a>
            <a class="news__category_link" href="#">İqtisadiyyat</a>
            <a class="news__category_link" href="#">Cəmiyyət</a>
            <a class="news__category_link" href="#">İdman</a>
            <a class="news__category_link" href="#">Mədəniyyət</a>
            <a class="news__category_link" href="#">Şou-Biznes</a>
            <a class="news__category_link" href="#">Kriminal</a>
            <a class="news__category_link" href="#">Dünya</a>
          </div>
          <form class="header__search">
            <input type="text" class="header__search-input" placeholder="Axtar..." />
            <a class="header__search-icon">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.6582 21.6162L19.79 16.748C19.5703 16.5283 19.2725 16.4062 18.96 16.4062H18.1641C19.5117 14.6826 20.3125 12.5146 20.3125 10.1562C20.3125 4.5459 15.7666 0 10.1562 0C4.5459 0 0 4.5459 0 10.1562C0 15.7666 4.5459 20.3125 10.1562 20.3125C12.5146 20.3125 14.6826 19.5117 16.4062 18.1641V18.96C16.4062 19.2725 16.5283 19.5703 16.748 19.79L21.6162 24.6582C22.0752 25.1172 22.8174 25.1172 23.2715 24.6582L24.6533 23.2764C25.1123 22.8174 25.1123 22.0752 24.6582 21.6162ZM10.1562 16.4062C6.7041 16.4062 3.90625 13.6133 3.90625 10.1562C3.90625 6.7041 6.69922 3.90625 10.1562 3.90625C13.6084 3.90625 16.4062 6.69922 16.4062 10.1562C16.4062 13.6084 13.6133 16.4062 10.1562 16.4062Z" fill="#F7F7F5" />
              </svg>
            </a>
          </form>
          <div class="header__top-logo">
            <img src="img/logo_white.svg" alt="Aypara Post">
          </div>
          <div class="header__menu"></div>
        </div>
      </div>
    </div>
    <div class="header__middle">
      <a href="#"> <img src="img/logo.svg" alt="Aypara Post Logo"></a>
    </div>
    <div class="header__bottom">
      <div class="container">
        <div class="header__bottom-inner">
          <div class="line"></div>
          <div class="slogan">El Bir Olsa, Dağ Oynadar Yerindən</div>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="header__banner">
      <div class="container">
        <div class="header__banner-inner">
          <img src="img/cocacola_banner.png" alt="Banner">
        </div>
      </div>
    </div>
  </header>
  <!-- *** HEADER END *** -->

  <?= $content ?>


  <footer class="footer">
    <!-- *** FOOTER WORD BANNER  *** -->
    <div class="footer__word-banner">
      <div class="sacroll_text">
        <div class=""> AZƏRBAYCANIN ƏN NORMAL VƏ ƏN AXTARILAN XƏBƏR SAYTINDASAN </div>
        <div class=""> AZƏRBAYCANIN ƏN NORMAL VƏ ƏN AXTARILAN XƏBƏR SAYTINDASAN </div>
      </div>
    </div>
    <!-- *** FOOTER WORD BANNER END *** -->

    <div class="footer__info">
      <div class="logo"><a href="#"><img src="/img/logo.svg" alt=""></a></div>
      <div class="info">
        &copy;
        <script>
          function getYear() {
            var time = new Date();
            var year = time.getFullYear();
            document.write(year);
          }
          getYear();
        </script>
        // Bütün Hüquqlar Qorunur // Hazırlanıb <a href="https://www.behance.net/yuzminay">SAM-BA</a>

      </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
  </footer>

  <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
