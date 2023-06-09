<?php
    use app\models\Presensi;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;

    /** @var yii\web\View $this */
    /** @var yii\data\ActiveDataProvider $dataprovider */
?>

<div>

    <h1><?=Html::encode($this->title) ?></h1>

    <p>
        <?=Html::button('id_matakuliah', ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'id_matakuliah',
            'tanggal_presensi',
            'metode_pembelajaran',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Presensi $model) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]);
    ?>
</div>