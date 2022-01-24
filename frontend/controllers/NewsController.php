<?php

namespace frontend\controllers;

use backend\models\Category;
use backend\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
  public function actionIndex($id)
  {
    $news = News::find()->where(['id' => $id])->one();
    $last_news = News::find()->orderBy(['id' => SORT_DESC])->limit(5)->all();

    return $this->render('index', [
      'news' => $news,
      'last_news' => $last_news,
    ]);
  }
}
