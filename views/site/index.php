<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'NTE Prediksi';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>NTE Prediksi !</h1>

        <p class="lead">Silahkan Melakukan Prediksi</p>


        <p> <?= html::a('klik di sini',['/prediksi/index'],['class' => 'btn btn-warning'])?> </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Prediksi</h2>

                <p>Prediksi adalah suatu proses memperkirakan secara sistematis tentang sesuatu yang paling mungkin terjadi di masa depan berdasarkan informasi masa lalu dan sekarang yang dimiliki, agar kesalahannya (selisih antara sesuatu yang terjadi dengan hasil perkiraan) dapat diperkecil.</p>

            </div>
            <div class="col-lg-4">
                <h2>Kebutuhan</h2>

                <p>kebutuhan adalah segala sesuatu yang dibutuhkan prusahaan untuk mempertahankan hidup serta untuk memperoleh kesejahteraan dan kenyamanan. Kebutuhan primer adalah kebutuhan utama atau kebutuhan pokok yang pertama harus dipenuhi untuk mempertahankan hidup.</p>

            </div>
            <div class="col-lg-4">
                <h2>Moving Average</h2>

                <p>Metode Moving Average digunakan untuk melakukan peramalan, semakin banyak data yang digunakan untuk peramalan maka semakin akurat pula hasil dari peramalan yang dilakukan. Rata-rata bergerak (Moving Average) adalah suatu metode peramalan yang dilakukan dengan mengambil sekelompok nilai pengamatan, mencari nilai rata-rata tersebut sebagai ramalan untuk periode yang akan datang.</p>

            </div>
        </div>

    </div>
</div>
