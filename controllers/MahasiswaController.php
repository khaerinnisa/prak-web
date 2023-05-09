<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionHapusKrs($id)
    {
        return $this->render('hapus-krs');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
