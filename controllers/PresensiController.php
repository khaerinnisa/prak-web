<?php

namespace app\controllers;
use app\models\Presensi;
use yii\data\ActiveDataProvider;

class PresensiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Presensi::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]); 
    }


    public function actionTambah()
    {
        $presensi = new Presensi();
        $presensi->id_matakuliah = 10;
        $presensi->tanggal_presensi = '2023-3-19';
        $presensi->metode_pembelajaran = 'online';
        if ($presensi->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($presensi->getErrors());
            die();
        }

    }


    public function actionUpdate($id)
    {
        $presensi = Presensi::findOne($id);
        $presensi->id_matakuliah = 13 ;
        if ($presensi->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($presensi->getError());
            die();
        }

    }

    public function actionDelete($id)
    {
        $presensi = Presensi::findOne($id);
        if ($presensi->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($presensi->getError());
            die();
        }
    }

    public function actionview($id)
    {
        $presensi = Presensi::findOne($id);
        if ($presensi->delete()) {
            return $this->render(['index']);
        }
        else {
            var_dump($presensi->getError());
            die();
        }
    }

   


}