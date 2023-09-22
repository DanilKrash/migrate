<?php

namespace app\controllers;
use app\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionsPage1()
    {
        $newses = News::find()->asArray()->all();
        return $this->render('page1', compact('$newses'));
    }
}