<?php

namespace app\controllers;
use app\models\Fakultas011;
use yii\data\ActiveDataProvider;

class Fakultas011Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Fakultas011::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

}