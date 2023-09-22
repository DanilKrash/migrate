<?php

namespace app\controllers;
use app\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionsPage1()
    {
        $posts = News::find()->asArray()->all();
        return $this->render('page1', compact('posts'));
    }
}