<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Laporan Prediksi hari ke 5';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediksi-harike5">
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
        Jumlah Prediksi Kebutuhan Hari ke 5 Adalah <?= (int)$pre3 ?>
    </p>


    <p align="center">hasil di ambil dari perhitungan data hari senin di tambah hari selasa di bagikan dengan jumlah ordo yang di gunakan yaitu 4 jadi <?= $data1 ?> + <?= $data2 ?> + <?= $data3 ?> + <?= $data4 ?> /4 = <?= (int)$pre3 ?></p>




</div>
