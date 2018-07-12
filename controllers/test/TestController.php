<?php

namespace app\controllers\test;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        var_dump('lls');
        exit;
    }
}