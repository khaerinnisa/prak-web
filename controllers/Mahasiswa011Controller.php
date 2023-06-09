<?php

namespace app\controllers;

use app\models\Mahasiswa011;
use yii\data\ActiveDataProvider;
use yii;

class Mahasiswa011Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa011::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
    public function actionCreate()
    {
        $mahasiswa011 = new Mahasiswa011;
        $mahasiswa011->no_induk_mahasiswa011 = '60200121011-'.rand(100,999);
        $mahasiswa011->nama_mahasiswa011 = 'khaerin nisaa';
        $mahasiswa011->kelas011 = 'D';
        $mahasiswa011->status011 = 'Baru';
        if ($mahasiswa011->save()){
            yii::$app->session->setFlash('success','Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa011 = Mahasiswa011::findOne($id);
        if ($mahasiswa011 !==null) {
            $mahasiswa011->kelas011 = 'A';
            $mahasiswa011->status011 = 'update';
            $mahasiswa011->save();
            yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa011 = Mahasiswa011::findOne($id);
        if ($mahasiswa011->delete()) {
            return $this->redirect(['index']);
        }
    }

    public function actionView($id) {
        $mahasiswa011 = Mahasiswa011::findOne($id);
        return $this->render('view',['mahasiswa011' => $mahasiswa011]);
    }
}