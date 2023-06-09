<?php
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\Html;
?>

<?= 
    Html::a('Tambah Mahasiswa', ['create'],['class' => 'btn btn-primary']);
?>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id011',
            'no_induk_mahasiswa011',
            'nama_mahasiswa011',
            'kelas011',
            'status011',
            ['class' => ActionColumn::className()]
        ]
    ]);
?>