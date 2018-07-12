<?php

namespace app\modules\controllers;

use app\modules\models\Admin;
use yii\web\Controller;

class LoginController extends Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        $admin = new Admin();

        if (Yii::$app->request->isPost) {
            $post = Yii::$app->requesr->post();
            $admin->login();
        }

        return $this->render('index', ['model'=>$admin]);
    }


}