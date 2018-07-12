<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionLogin()
    {
        $this->layout = false;
        return $this->render('login');
    }

    public function actionEdit()
    {
        $this->layout = false;
        return $this->render('edit');
    }

    public function actionResetPwd()
    {
        $this->layout = false;
        return $this->render('reset_pwd');
    }
}