<?php

namespace frontend\controllers;

use backend\models\Category;
use backend\models\News;
use yii\data\Pagination;
use yii\web\Controller;

class CategoriesController extends Controller
{
  public function actionIndex($id)
  {
    $category = Category::find()->where(['id' => $id])->one();

    $news = News::find()->where(['org_category_name' => $category->name]);


    $pagination = new Pagination([
      'defaultPageSize' => 15,
      'totalCount' => $news->count(),
    ]);

    $news = $news
      ->orderBy(['id' => SORT_DESC])
      ->offset($pagination->offset)
      ->limit($pagination->limit)
      ->all();


    return $this->render('index', [
      'category' => $category,
      'news' => $news,
      'pagination' => $pagination
    ]);
  }
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
