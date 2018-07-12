<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class BookController extends Controller
{
    public function actionInfo()
    {
        $this->layout = false;
        return $this->render('info');
    }

    public function actionSet()
    {
        $this->layout = false;
        return $this->render('set');
    }

    public function actionImages()
    {
        $this->layout = false;
        return $this->render('images');
    }

    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('Index');
    }

    public function actionCat()
    {
        $this->layout = false;
        return $this->render('cat');
    }

    public function actionCatSet()
    {
        $this->layout = false;
        return $this->render('cat_set');
    }
}