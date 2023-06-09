<?php
    use app\models\Fakultas011;
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
        <?=Html::button('Fakultas Baru', ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nama_resmi',
            'alamat',
            'nama_singkat',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Fakultas011 $model) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]);
    ?>
</div>