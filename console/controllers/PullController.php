<?php

namespace console\controllers;

use yii\console\Controller;
use backend\models\Category;
use backend\models\Search\CategorySearch;

use backend\models\News;
use backend\models\Search\NewsSearch;

use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use simplehtmldom\HtmlWeb;
use yii\helpers\ArrayHelper;


class PullController extends Controller
{
  public  $domain_oxu = "https://www.oxu.az";

  public function actionPullNewsFromWebsite()
  {
    $links = $this->pullNewsToArr($this->domain_oxu);
    $this->pullNewsToDb($links, $this->domain_oxu);
  }

  private function pullNewsToArr($domain)
  {
    $client = new HtmlWeb();
    $html = $client->load($domain . '/all');

    $categories = Category::find()->all();

    $categories_arr = ArrayHelper::map($categories, 'id', 'name');

    $web_strings = [];

    foreach ($html->find('a') as $element) {
      array_push($web_strings, $element->href);
    }

    $news_links = [];

    foreach ($web_strings as $link) {
      $link_arr = explode('/', $link);

      $link_slahs     = substr_count($link, '/') == 2; // needed link example /society/444
      $link_has_categ = (count($link_arr) >= 1) ? (in_array($link_arr[1], $categories_arr) ?: false) : false;

      if ($link_slahs && $link_has_categ) {
        array_push($news_links, $link);
      }
    }

    return $news_links;
  }

  private function pullNewsToDb($news_links, $domain)
  {
    $new_news_links = array_reverse($news_links);

    foreach ($new_news_links as $link) {
      $news_client = new HtmlWeb();
      $news_html = $news_client->load($domain . $link);

      $image   = $news_html->find('.news-img', 0)->src;
      $title = $news_html->find('.news-inner h1', 0)->innertext;

      $text_str = "";

      foreach ($news_html->find('.news-inner p') as $element) {
        if (strlen($element->innertext) > 5)
          $text_str .= " <p>" . $element->innertext . " </p>";
      }

      $org_category_name = explode("/", $link)[1];
      $org_id = explode("/", $link)[2];
      $category = Category::find()->where(['name' => $org_category_name])->one();
      $category_id = $category->id;

      $resource_name = $domain;
      $resource_link = $domain . $link;

      $date_day = $news_html->find('.date-day', 0)->innertext;
      $date_month = $news_html->find('.date-month', 0)->innertext;
      $date_year = $news_html->find('.date-year', 0)->innertext;
      $when_time = $news_html->find('.when-time', 0)->innertext;

      $watch_count = $news_html->find('.stats-i-container.stats_views .stats-i', 0)->innertext;

      $whole_time = $date_day . " " . $date_month . " " . $date_year . " " . $when_time;

      $model = new News();
      $model->category_id = $category_id;
      $model->org_id = $org_id;
      $model->org_category_name = $org_category_name;
      $model->title = $title;
      $model->text = $text_str;
      $model->resource_name = $resource_name;
      $model->resource_link = $resource_link;
      $model->image = $image;
      $model->org_created_at = $whole_time;
      $model->org_watch_count = $watch_count;
      $model->save();
    }
  }
}
