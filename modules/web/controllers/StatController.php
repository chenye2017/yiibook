<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class StatController extends Controller
{
    public function actionProduct()
    {
        $this->layout = false;
        return $this->render('product');
    }


    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    public function actionMember()
    {
        $this->layout = false;
        return $this->render('member');
    }

    public function actionShare()
    {
        $this->layout = false;
        return $this->render('share');
    }
}