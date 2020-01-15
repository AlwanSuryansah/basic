<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Laporan Prediksi hari ke 6';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediksi-harike6">
    <h1><?= Html::encode($this->title) ?></h1>

   <?= GridView::widget([
        'dataProvider' => $dataProvider,
       
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hari',
            'tanggl',
            'jumlah',

        ],
    ]); 
    ?>

    <p align="center">
        Jumlah Prediksi Kebutuhan Hari ke 6 Adalah <?= (int)$pre3 ?>
    </p>


    <p align="center">hasil di ambil dari perhitungan data hari senin di tambah hari selasa di bagikan dengan jumlah ordo yang di gunakan yaitu 5 jadi <?= $data1 ?> + <?= $data2 ?> + <?= $data3 ?> + <?= $data4 ?> + <?= $data5 ?> /5 = <?= (int)$pre3 ?></p>




</div>
