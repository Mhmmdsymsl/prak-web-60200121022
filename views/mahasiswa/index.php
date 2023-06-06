<?php
    use yii\grid\GridView;
?>



<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'Nim',
            'Nama',
            'Kelas',
            'profil.id_mahasiswa',
        ]
        ]);