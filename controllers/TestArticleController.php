<?php

namespace app\controllers;

use app\models\Country;
use yii\web\Controller;

class TestArticleController extends Controller
{
    public function actionIndex()
    {
        var_dump('ll');
    }

    public function actionTest()
    {
        $country = new Country();
        $res = $country->find()->where('name = :param1 or name = :param2', ['param1'=>'China', 'param2'=>'India'])->asArray()->all();
        var_dump($res);
        exit;
    }
}