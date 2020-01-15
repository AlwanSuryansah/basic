<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Laporan Prediksi hari ke 4';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediksi-harike4">
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
        Jumlah Prediksi Kebutuhan Hari ke 4 Adalah <?= (int)$pre3 ?>
    </p>


    <p align="center">hasil di ambil dari perhitungan data hari senin di tambah hari selasa di bagikan dengan jumlah ordo yang di gunakan yaitu 3 jadi <?= $data1 ?> + <?= $data2 ?> + <?= $data3 ?> /3 = <?= (int)$pre3 ?></p> 





</div>
