<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prediksi-harike7">
    <h1><?= Html::encode($this->title) ?></h1>
<p>
    
        <?= Html::a('Cetak Laporan', ['report4'], ['class' => 'btn btn-primary']) ?>
        
    </p>
 <div align="center" >
        <h1> Prediksi hari ke 7</h1>
    </div>

    <p align="center">
        Jumlah Prediksi Kebutuhan Hari ke 7 Adalah <?= $pre3 ?>
    </p>


    <p align="center">hasil di ambil dari perhitungan data hari senin di tambah hari selasa di bagikan dengan jumlah ordo yang di gunakan yaitu 6 jadi  <?= $data1 ?> + <?= $data2 ?> + <?= $data3 ?> + <?= $data4 ?> + <?= $data5 ?> + <?= $data5 ?>/6 = <?= (int)$pre3 ?></p>



</div>
 <samp style="margin-bottom: 30px;"><?= html::a('Kembali',['/prediksi/index'],['class' => 'btn btn-primary'])  ?> </samp>  


