<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class FinanceController extends Controller
{
    public function actionAccount()
    {
        $this->layout = false;
        return $this->render('account');
    }


    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    public function actionSet()
    {
        $this->layout = false;
        return $this->render('set');
    }
}