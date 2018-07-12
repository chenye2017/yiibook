<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class QrcodeController extends Controller
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

    public function actionPayInfo()
    {
        $this->layout = false;
        return $this->render('pay_info');
    }
}