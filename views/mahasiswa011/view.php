<?php
    use yii\widgets\DetailView;
?>
<?=
    DetailView::widget([
        'model' => $mahasiswa011,
        'attributes' => [
            'id011',
            'no_induk_mahasiswa011',
            'nama_mahasiswa011',
            'kelas011',
            'status011',
        ]
    ]);

?>