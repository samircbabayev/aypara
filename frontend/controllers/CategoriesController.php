<?php

namespace frontend\controllers;

use backend\models\News;
use yii\data\Pagination;
use yii\web\Controller;

class CategoriesController extends Controller
{
  public function actionLastNews()
  {
    $news = News::find();


    $pagination = new Pagination([
      'defaultPageSize' => 15,
      'totalCount' => $news->count(),
    ]);

    $news = $news
      ->orderBy(['id' => SORT_DESC])
      ->offset($pagination->offset)
      ->limit($pagination->limit)
      ->all();


    return $this->render(
      'lastnews',
      [
        'news' => $news,
        'pagination' => $pagination
      ]
    );
  }
}
