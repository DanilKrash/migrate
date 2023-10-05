<?php

namespace app\controllers;
use app\models\Category;
use app\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionPage1()
    {
        $categories = Category::find()->asArray()->all();
        return $this->render('page1', compact('categories'));
    }

    public function actionPage2()
    {
        if (isset($_GET['id']) && $_GET['id']!="")
        {
            $categories = Category::find()->where(['id'=>$_GET['id']])-> asArray()->one();
            $news = News::find()->where(['category_id'=>$_GET['id']])-> asArray()->all();
            return $this->render('page2', compact('categories', 'news'));
        }
        else
            return $this->redirect(['news/page2']);
    }
}