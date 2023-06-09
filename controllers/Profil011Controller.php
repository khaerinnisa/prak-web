<?php

namespace app\controllers;
use app\models\Profil011;
use yii\data\ActiveDataProvider;

class Profil011Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Profil011::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

}